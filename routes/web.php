<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KasirController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/forgotpassword', function () {
    return view('auth.forgotpassword');
});
Route::post('/forgotpassword', [CustomAuthController::class,'forgotpassword'])->name('forgotpassword');
Route::get('/register', [CustomAuthController::class,'register']);
// Register Kasir
Route::post('/register-kasir', [CustomAuthController::class,'registerkasir'])->name('register-kasir');
// End Kasir
// To Dasboard
Route::post('/proses_login', 'App\Http\Controllers\CustomAuthController@proses_login')->name('proses_login');
Route::get('/admin', [CustomAuthController::class,'adminn'])->name('admin')->middleware('checkrole');
Route::get('/kasir', [CustomAuthController::class,'kasirr'])->name('kasir');
Route::get('/logout', 'App\Http\Controllers\CustomAuthController@logout')->name('logout');
// End Dasboard
// Dasboard
Route::get('/profile', 'App\Http\Controllers\AdminController@profile')->name('profile');
// End Dasboard