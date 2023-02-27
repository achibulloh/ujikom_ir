<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Cache\Store;
use App\Models\User;
use App\Models\Kategori;
use Session;


class AdminController extends Controller
{
    public function profile() {
        $data = User::all();
        return view("admin.profile",compact('data'));   
    } 
    public function profileupdate(Request $request, $id) {
        $user = User::find($id);
        $user->photo = $request->file('photo')->store('photo');
        $user->username = $request->username;
        $user->nama_lengkap = $request->nama_lengkap;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->alamat = $request->alamat;
        $user->nomor_tlp = $request->nomor_tlp;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->update();
        Session::flash('success','Data Anda Berhasil Update');
        return redirect('profile');
    }
    public function users() {
        $data = User::all();
        return view("admin.users")->with('data', $data); 
    } 
    public function laporan() {
        $data = User::all();
        return view("admin.laporan")->with('data', $data);   
    } 
    public function kategori() {
        $data = Kategori::all();
        return view("admin.kategori")->with('data', $data);   
    } 
    public function menu() {
        $data = Kategori::all();
        return view("admin.menu")->with('data', $data);   
    } 
    public function tambahusers (Request $request) {
        $request->validate([
            'photo'=>'image',
            'username'=>'required|unique:users',
            'nama_lengkap'=>'required',
            'jenis_kelamin'=>'required',
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

        return redirect('/kategori')->with('success','You have successfully deleted users.');
    }
    public function editkategori($id_kategori){
        $data = Kategori::where('id_kategori', $id_kategori)->first();
        return view('kategori', compact('data'));
    }
    public function updatekategori(Request $request, $id_kategori) {
        $data = Kategori::where('id_kategori', '=', $id_kategori);
        $data->update($request->except(['_token', 'submit']));
        Session::flash('success','Data Anda Berhasil Update');
        return redirect('kategori');
    }
}
