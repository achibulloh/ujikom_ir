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
        return view("kasir.dasboard", compact('data', 'cart'));   
    }
    public function store (Request $request, $id_menu){
        // $cart = session('cart');
        // $data = Menu::detail_menu('id_menu');
        // $cart['id_menu'] = [
        //     "nama_menu" => $data->nama_menu,
        //     "harga" => $data->harga,
        //     "photo_menu" => $data->photo_menu,
        //     "jumlah" => 1
        // ];
        // session(['cart'=>$cart]);
        $menu = Menu::find($id_menu);
        $menu = new Cart();
        $menu->id_kasir = $request->id_kasir;
        $menu->id_menu = $request->id_menu;
        $menu->qty = 1;
        $menu->save();
        return redirect('/kasir');
    }
}
