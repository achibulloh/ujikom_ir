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
        // $menu = Menu::find($id_menu);
        // $menu = new Cart();
        // $menu->id_kasir = $request->id_kasir;
        // $menu->id_menu = $request->id_menu;
        // $menu->qty = 1;
        // $menu->save();
        $this->validate($request, [
            'id_menu' => 'required|exists:menu,id_menu',
            'qty' => 'required|integer' 
        ]);

            //AMBIL DATA CART DARI COOKIE, KARENA BENTUKNYA JSON MAKA KITA GUNAKAN JSON_DECODE UNTUK MENGUBAHNYA MENJADI ARRAY
            $carts = json_decode($request->cookie('dw-carts'), true); 
        
            //CEK JIKA CARTS TIDAK NULL DAN PRODUCT_ID ADA DIDALAM ARRAY CARTS
            if ($carts && array_key_exists($request->product_id, $carts)) {
                //MAKA UPDATE QTY-NYA BERDASARKAN PRODUCT_ID YANG DIJADIKAN KEY ARRAY
                $carts[$request->product_id]['qty'] += $request->qty;
            } else {
                //SELAIN ITU, BUAT QUERY UNTUK MENGAMBIL PRODUK BERDASARKAN PRODUCT_ID
                $product = Menu::find($request->id_menu);
                //TAMBAHKAN DATA BARU DENGAN MENJADIKAN PRODUCT_ID SEBAGAI KEY DARI ARRAY CARTS
                $carts[$request->product_id] = [
                    'qty' => $request->qty,
                    'nama_menu' => $product->id_menu,
                    'product_name' => $product->name,
                    'product_price' => $product->price,
                    'product_image' => $product->image
                ];
            }

            //BUAT COOKIE-NYA DENGAN NAME DW-CARTS
            //JANGAN LUPA UNTUK DI-ENCODE KEMBALI, DAN LIMITNYA 2800 MENIT ATAU 48 JAM
            $cookie = cookie('dw-carts', json_encode($carts), 2880);
            //STORE KE BROWSER UNTUK DISIMPAN
            return redirect()->back()->cookie($cookie);

        // return redirect('/kasir');
    }
    public function menu() {
        $data = Menu::with('kategori')->get();
        return $data;
    } 
}
