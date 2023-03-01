<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Models\Menu;

class KasirController extends Controller
{
    public function kasirr() {
        $data = Menu::all();
        return view("kasir.dasboard")->with('data', $data);   
    }
}
