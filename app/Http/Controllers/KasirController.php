<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Models\Menu;
use App\Models\User;
use App\Models\Cart;

class KasirController extends Controller
{
    public function kasirr() {
        $data = Menu::all();
        // $data1 = Menu::paginate(6);
        $cart = Cart::all();
        $totalCart = $cart->count();
        // $menu = Menu::join()
        return view("kasir.dasboard", compact('data', 'cart', 'totalCart'));   
    }
    // public function store (Request $request){
    //     // $menu = Menu::findOrFail($request->input('id_menu'));
    //     if ($request->qty == 0) {
    //         Cart::create([
    //             'id_kasir' => Auth::user()->id,
    //             'id_menu' => $request->id_menu,
    //             'qty' => 1
    //         ]);
    //         return redirect('/kasir');
    //     } else {
    //         $qty = $request->qty;
    //         Cart::updated([
    //             'qty' => $qty + 1
    //         ]);
    //         return redirect('/kasir');
    // }
    // }
    public function store (Request $request) {
        if (Auth()->Cart()->qty == 0) {
            Cart::create([
                'id_kasir' => Auth::user()->id,
                'id_menu' => $request->id_menu,
                'qty' => 1    
            ]);
            return redirect('/kasir');
        }
        // return redirect('/kasir');
    }

    public function tambah_qty(request $request, $id_cart) {
        $qty = $request->qty;
        Cart::where('id_cart', $id_cart)->update([
            'qty' => $qty + 1
        ]);
        return redirect('/kasir')->with('success','data sudah masuk');
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
}
