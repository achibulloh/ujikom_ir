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
}
