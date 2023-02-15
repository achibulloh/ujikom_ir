<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class AdminController extends Controller
{
    public function profile() {
        return view("admin.profile");   
    } 
    public function users() {
        return view("admin.users");   
    } 
    public function laporan() {
        return view("admin.laporan");   
    } 
    public function kategori() {
        return view("admin.kategori");   
    } 
    public function menu() {
        return view("admin.menu");   
    } 
}
