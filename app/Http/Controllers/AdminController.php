<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Cache\Store;
use App\Models\User;
use App\Models\Menu;
use App\Models\Kategori;
use App\Models\Transaksi;
use Cache;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use PDF;

class AdminController extends Controller
{
    public function transaksi() {
        $data = Transaksi::all();
        $users = User::all();
        return view("admin.transaksi",compact('data', 'users'));   
    } 
    public function profile() {
        $data = User::all();
        return view("admin.profile",compact('data'));   
    } 
    public function profileupdate(Request $request, $id) {
        $user = User::find($id);
        if ($request->file('photo')) {
            $user->photo = $request->file('photo')->store('photo');
        }
        $user->username = $request->username;
        $user->nama_lengkap = $request->nama_lengkap;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->alamat = $request->alamat;
        $user->nomor_tlp = $request->nomor_tlp;
        $user->email = $request->email;
        if ($request->updatepassword) $user->password = Hash::make($request->updatepassword);
        $user->update();
        Session::flash('success','Data Anda Berhasil Update');
        return redirect('profile');
    }
    public function users() {
        $data = User::all();
        return view("admin.users")->with('data', $data); 
    }
    public function activity() {
        $data = User::all();
        return view("admin.activity-log-user")->with('data', $data); 
    }
    public function laporan(Request $request) {
        // $data = Transaksi::all();
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $data = Transaksi::whereBetween('created_at',[$start_date,$end_date])->get();
            $start = Carbon::parse(request()->start_date)->translatedFormat('d F Y');
            $end = Carbon::parse(request()->start_date)->translatedFormat('d F Y');
        } else {
            $start_date = 0;
            $end_date = 0;
            $data = Transaksi::latest()->get();
            
            $start = Carbon::parse(request()->start_date)->translatedFormat('d F Y');
            $end = Carbon::parse(request()->start_date)->translatedFormat('d F Y');
        }
        // 
        return view("admin.laporan", compact("start_date","end_date","start","end"))->with('data', $data);   
    } 
    public function exportPDF(Request $request) {
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $data = Transaksi::whereBetween('created_at',[$start_date,$end_date])->get();

            $start = Carbon::parse(request()->start_date)->translatedFormat('d F Y');
            $end = Carbon::parse(request()->start_date)->translatedFormat('d F Y');
        } else {
            $data = Transaksi::latest()->get();
            $start_date = 'Semua Data';
            $end_date = 'Semua Data';
            // $start = $start_date;
            // $end = $end_date;
            $start = Carbon::parse(request()->start_date)->translatedFormat('d F Y');
            $end = Carbon::parse(request()->start_date)->translatedFormat('d F Y');
        }
        // $totalpenghasilan = $data
        // $tr = Transaksi::where('totalbayar');
        $pdf = PDF::loadView('admin.laporantopdf', compact('data','start','end','start_date','end_date'));
        $pdf->setPaper('A4', 'potrait');
        
        return $pdf->stream('LaporanSmartCashier.pdf');
        
      }
    public function kategori() {
        $data = Kategori::all();
        return view("admin.kategori")->with('data', $data);   
    } 
    public function menu() {
        $data = Menu::with('kategori')->get();
        $kategori = Kategori::all();
        return view("admin.menu", compact('data', 'kategori'));
    } 
    public function updatemenu(Request $request, $id_menu) {
        $menu = Menu::find($id_menu);
        if ($request->file('photo')) {
            $menu->photo_menu = $request->file('photo')->store('photo');
        }
        $menu->nama_menu = $request->nama_menu;
        $menu->id_kategori = $request->id_kategori;
        $menu->harga = $request->harga;
        $menu->stok = $request->stok;
        $menu->update();
        return redirect('/menu')->with('success','You have successfully update menu.');
    }
    public function tambahmenu (Request $request) {
        $request->validate([
            'nama_menu'=>'required|unique:menu',
            'id_kategori'=>'required',
            'harga'=>'required',
            'stok'=>'required'
        ]);
        $newPost = [
            'nama_menu' => $request->nama_menu,
            'id_kategori' => $request->id_kategori,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'nomor_tlp' => $request->nomor_tlp,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ];
        Menu::create($newPost);

        return redirect('/menu')->with('success', "You have successfully create menu.");
    }
    public function hapusmenu($id_menu) {
        $menu = Menu::where('id_menu', '=', $id_menu);
        $menu->delete();

        return redirect('/menu')->with('success','You have successfully deleted manu.');
    }

    public function tambahusers (Request $request) {
        $request->validate([
            'photo'=>'image',
            'username'=>'required|unique:users',
            'nama_lengkap'=>'required',
            'harga'=>'required',
            'alamat'=>'required',
            'nomor_tlp'=>'required|min:12|max:13',
            'email'=>'required|email|unique:users',
            'role'=>'required',
            'password'=>'required|min:6|max:30'
        ]);
        $newPost = [
            'photo' => $request->file('photo')->store('photo'),
            'username' => $request->username,
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'nomor_tlp' => $request->nomor_tlp,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ];
        User::create($newPost);
        Storage::disk('public')->put('file.txt', 'Contents');

        return redirect('/tambahuser')->with('success', "You have successfully registered users.");
    }
    public function destroy($id) {
        $user = User::find($id);
        $user->delete();

        return redirect('/users')->with('success','You have successfully deleted users.');
    }

    public function edit(Request $request, $id){
        $user = User::where('id', $id)->first();
        return view('users', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->photo = $request->file('photo')->store('photo');
        $user->username = $request->username;
        $user->nama_lengkap = $request->nama_lengkap;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->alamat = $request->alamat;
        $user->nomor_tlp = $request->nomor_tlp;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->update();
        Session::flash('success','Data Anda Berhasil Update');
        return redirect('users');
    }
    public function tambahkategori (Request $request) {
        $request->validate([
            'nama_kategori'=>'required|unique:kategori',
        ]);

        $kategori = new Kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
        Session::flash('success','You have successfully add kategori.');
        return redirect('kategori');
    }
    public function hapuskategori($id_kategori) {
        $user = Kategori::where('id_kategori', '=', $id_kategori);
        $user->delete();

        return redirect('/kategori')->with('success','You have successfully deleted kategori.');
    }
    public function editkategori($id_kategori){
        $data = Kategori::where('id_kategori', $id_kategori)->first();
        return view('kategori', compact('data'));
    }
    public function updatekategori(Request $request, $id_kategori) {
        $data = Kategori::where('id_kategori', '=', $id_kategori);
        $data->update($request->except(['_token', 'submit']));
        Session::flash('success','You have successfully edited the category.');
        return redirect('kategori');
    }
}
