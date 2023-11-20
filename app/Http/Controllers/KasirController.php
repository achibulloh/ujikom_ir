<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Models\Menu;
use App\Models\User;
use App\Models\Cart;
use Carbon\Carbon;

class KasirController extends Controller
{
    public function kasirr(Request $request) {
        $users = User::all();
        $data = Menu::all();
        $kategori = Kategori::all();
        // $data1 = Menu::paginate(6);
        $cart = Cart::all()->where('id_kasir', Auth::id());
        $totalCart = $cart->count();
        // $menu = Menu::join()
        $totalHarga = 0;

        foreach ($cart as $c) {
            $menu = Menu::where('id_menu', $c->id_menu)->first();
            $hargaMenu = $menu->harga;
            $qty = $c->qty;
            $totalHarga += $hargaMenu * $qty;
        }
        $totalHargaFormatted = number_format($totalHarga,0,',','.');
        return view("kasir.dasboard", compact('data', 'cart', 'totalCart','request','totalHargaFormatted', 'kategori','totalHarga'));  
    }
    public function store(Request $request)
    {
        $doble = Cart::where('id_menu', $request->id_menu)->first();
        if ($doble) {
            $qty = $doble->qty;
            $doble->update([
                'qty' => $qty + 1
            ]);
            return redirect('/kasir');
        }
        Cart::create([
            'id_kasir' => Auth::user()->id,
            'id_menu' => $request->id_menu,
            'qty' => 1    
        ]);
        return redirect('/kasir');
    }

    public function tambah_qty(request $request) {
        $doble = Cart::where('id_menu', $request->id_menu)->first();
        $qty = $doble->qty;
        $doble->update([
            'qty' => $qty + 1
        ]);
        return redirect('/kasir');
    }
    public function kurang_qty(request $request) {
        $doble = Cart::where('id_menu', $request->id_menu)->first();
        $qty = $doble->qty;
        if ($qty < 1) {
            $dl = Cart::where('id_cart', $request->id_cart)->first();
            $dl->delete();
            return redirect('/kasir')->with('delet');
        } else {
            $qty = $doble->qty;
            $doble->update([
                'qty' => $qty - 1
            ]);
        return redirect('/kasir');
        }
        

    }
    public function menu() {
        $data = Menu::with('kategori')->get();
        return $data;
    } 
    public function clearmenu($id_kasir){
        // Cart::find($id_kasir)->delete();
            $cart = Cart::find($id_kasir);
            $cart = Cart::where('id_kasir', '=', $id_kasir);
            $cart->delete();

        return redirect('/kasir');
    }
    public function carii(Request $request){
        if ($request) {
            $menu = Menu::where('nama_menu', 'like', '%'.$request->cari.'%');
        } else {
            $menu = Menu::all();
        }
        return view("kasir.dasboard", compact('menu'));
    }

    public function transaksi(Request $request){
        $cart = Cart::where('qty');
        // $jumlah_menu = $cart->count();
        // $transaksi = new Transaksi();
        $request->validate([
            'nama_pelangan'=>'required'
        ]);

        $transaksi = new Transaksi();
        $transaksi->id_kasir = Auth::user()->id;
        $transaksi->nama_pelangan = $request->nama_pelangan;
        $transaksi->jumlah_menu = $request->jumlah_menu;
        $transaksi->total_bayar = $request->total_bayar;
        $transaksi->uangtunai = $request->uangtunai;
        $transaksi->change = $request->change;
        $transaksi->metode_pembayaran = $request->metode_pembayaran;
        $transaksi->status = $request->status;
        $cek = $transaksi->save();
        if ($cek) {
            $id_kasir = Auth::user()->id;
            $cart = Cart::find($id_kasir);
            $cart = Cart::where('id_kasir', '=', $id_kasir);
            $cart->delete();
            return redirect('/kasir')->with('success','Transaksi Success');
        } else {
            return redirect('/kasir')->with('fail','Transaksi Gagal');
        }
    }
}
