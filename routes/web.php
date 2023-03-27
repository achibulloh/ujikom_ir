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

// Route::get('/', function () {
//     // if(!Session::get('/')){
//     //     // return redirect('/');
//     // }
//     // else{
//         //     return redirect('admin');
//         // }
        
//             return view('auth.login');
// });
Route::get('/', [CustomAuthController::class,'index'])->name('index')->middleware('guest');
Route::get('/forgotpassword', function () {
    return view('auth.forgotpassword');
});
Route::post('/forgotpassword', [CustomAuthController::class,'forgotpassword'])->name('forgotpassword');
Route::get('/register', [CustomAuthController::class,'register']);
// Register Kasir
Route::post('/register-kasir', [CustomAuthController::class,'registerkasir'])->name('register-kasir');
Route::post('/kasir/{id}', [KasirController::class,'store']);
Route::get('/kasir/menu', 'App\Http\Controllers\KasirController@menu')->name('menu');
// Route::get('/cart', [KasirController::class,'store'])->where('id','[0-9]+');
// End Kasir
// To Dasboard
Route::post('/proses_login', 'App\Http\Controllers\CustomAuthController@proses_login')->name('proses_login');
Route::get('/admin', [CustomAuthController::class,'adminn'])->name('admin')->middleware('checkadmin');
Route::get('/kasir', [KasirController::class,'kasirr'])->name('kasir')->middleware('checkcashier')->name('ds');
Route::get('/logout', 'App\Http\Controllers\CustomAuthController@logout')->name('logout');
// End Dasboard
// Dasboard Admin
Route::post('/profile/{id}/update', 'App\Http\Controllers\AdminController@profileupdate')->name('profileupdate');
Route::get('/profile', 'App\Http\Controllers\AdminController@profile')->name('profile')->middleware('checkadmin');
Route::get('/laporan', 'App\Http\Controllers\AdminController@laporan')->name('laporan')->middleware('checkadmin');
Route::get('/users', 'App\Http\Controllers\AdminController@users')->name('users')->middleware('checkadmin');
Route::get('/tambahuser', [AdminController::class,'users']);
Route::post('/tambahuser', [AdminController::class,'tambahusers'])->name('tambahuser');
Route::delete('/users/{id}', [AdminController::class, 'destroy'])->name('hapususer');
Route::post('/users/{id}/update', 'App\Http\Controllers\AdminController@update');
Route::get('/users/{id}/edit', 'App\Http\Controllers\AdminController@edit');
Route::get('/menu', 'App\Http\Controllers\AdminController@menu')->name('menu')->middleware('checkadmin');
Route::get('/kategori', 'App\Http\Controllers\AdminController@kategori')->name('kategori')->middleware('checkadmin');
Route::post('/tambahkategori', 'App\Http\Controllers\AdminController@tambahkategori')->name('tambahkategori');
Route::delete('/hapuskategori/{id}', [AdminController::class, 'hapuskategori'])->name('hapuskategori');
Route::delete('/hapusmenu/{id}', [AdminController::class, 'hapusmenu'])->name('hapusmenu');
Route::post('/menu/{id}/update', 'App\Http\Controllers\AdminController@updatemenu');
Route::post('/kategori/{id}/updatekategori', 'App\Http\Controllers\AdminController@updatekategori');
Route::get('/kategori/{id}/editkategori', 'App\Http\Controllers\AdminController@editkategori');
Route::post('/tambahmenu', 'App\Http\Controllers\AdminController@tambahmenu')->name('tambahmenu');
// End Dasboard Admin
