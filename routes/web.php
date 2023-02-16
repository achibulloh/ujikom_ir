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
Route::get('/admin', [CustomAuthController::class,'adminn'])->name('admin')->middleware('checkadmin');
Route::get('/kasir', [CustomAuthController::class,'kasirr'])->name('kasir')->middleware('checkcashier');
Route::get('/logout', 'App\Http\Controllers\CustomAuthController@logout')->name('logout');
// End Dasboard
// Dasboard Admin
Route::get('/profile', 'App\Http\Controllers\AdminController@profile')->name('profile')->middleware('checkadmin');
Route::get('/laporan', 'App\Http\Controllers\AdminController@laporan')->name('laporan')->middleware('checkadmin');
Route::get('/users', 'App\Http\Controllers\AdminController@users')->name('users')->middleware('checkadmin');
Route::post('/tambahuser', [AdminController::class,'tambahusers'])->name('tambahuser');
Route::delete('/users/{id}', [AdminController::class, 'destroy'])->name('hapususer');
Route::get('/users/{id}/edit', [AdminController::class, 'edit'])->name('edit');
Route::post('/update', [AdminController::class, 'update'])->name('update');
Route::get('/menu', 'App\Http\Controllers\AdminController@menu')->name('menu')->middleware('checkadmin');
Route::get('/kategori', 'App\Http\Controllers\AdminController@kategori')->name('kategori')->middleware('checkadmin');
// End Dasboard
