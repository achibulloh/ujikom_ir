<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Models\Menu;
use App\Models\Cart;

class KasirController extends Controller
{
    public function kasirr() {
        $data = Menu::all();
        $cart = Cart::all();
        // $menu = Menu::join()
        return view("kasir.dasboard", compact('data', 'cart'));   
    }
    public function store (Request $request){
        // $cart = session('cart');
        // $data = Menu::detail_menu('id_menu');
        // $cart['id_menu'] = [
        //     "nama_menu" => $data->nama_menu,
        //     "harga" => $data->harga,
        //     "photo_menu" => $data->photo_menu,
        //     "qty" => 1
        // ];
        // session(['cart'=>$cart]);
        // $menu = Menu::find($id_menu);
        // $menu = new Cart();
        // $menu->id_kasir = $request->id_kasir;
        // $menu->id_menu = $request->id_menu;
        // $menu->qty = 1;
        // $menu->save();
        // $data = Menu::where('id_menu', '=', $id_menu);
        // $menu = Menu::get($id_menu);
        // $session[$menu] = [
        //     "photo_menu" => $data->photo_menu,
        //     "nama_menu" => $data->nama_menu,
        //     "harga" => $data->harga,
        //     "qty" => 1
        // ];
        $menu = Menu::findOrFail($request->input('id_menu'));
        // Cart::add(
        //     $menu->id_menu,
        //     $menu->photo_menu,
        //     $menu->name_menu,
        //     $request->input('qty'),
        //     $menu->price / 10,
        // );
        Cart::create([
            'id_kasir' => Auth::user()->id,
            'id_menu' => $request->id_menu,
            'qty' => 1
        ]);
        return redirect('/kasir')->with('success','data sudah masuk');

    }
    public function tambah_qty() {
        Cart::updated([
            'qty' => 1
        ]);
        return redirect('/kasir')->with('success','data sudah masuk');
    }
    public function menu() {
        $data = Menu::with('kategori')->get();
        return $data;
    } 
    public function clearmenu($id_kasir){
        $cart = Cart::where('id_kasir', '=', $id_kasir);
        $cart->delete();

        return redirect('/kasir');
    }
}
