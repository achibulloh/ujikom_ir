<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
    public function profile() {
        return view("admin.profile");   
    } 
    public function users() {
        $data = User::all();
        return view("admin.users")->with('data', $data); 
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
    public function tambahusers (Request $request) {
        $request->validate([
            'username'=>'required|unique:users',
            'nama_lengkap'=>'required',
            'jenis_kelamin'=>'required',
            'alamat'=>'required',
            'nomor_tlp'=>'required|min:12|max:13',
            'email'=>'required|email|unique:users',
            'role'=>'required',
            'password'=>'required|min:6|max:30'
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->nama_lengkap = $request->nama_lengkap;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->alamat = $request->alamat;
        $user->nomor_tlp = $request->nomor_tlp;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return redirect('/users')->with('success','You have successfully registered users.');
        } else {
            return back()->with('fail','Smothing wrong');
        }
    }
    public function destroy($id) {
        $user = User::find($id);
        $user->delete();

        return redirect('/users')->with('success','You have successfully deleted users.');
    }

    public function edit(Request $request, $id){
        $user = users::where('id', $id)->first();
        return view('users', compact('user'));
    }

    public function update(Request $request){
        $request->validate([
            'username'=>'required',
            'nama_lengkap'=>'required',
            'jenis_kelamin'=>'required',
            'alamat'=>'required',
            'nomor_tlp'=>'required|min:12|max:13',
            'email'=>'required|email',
            'role'=>'required',
            'status_akun'=>'required',
            'password'=>'required|min:6|max:225'
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->nama_lengkap = $request->nama_lengkap;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->alamat = $request->alamat;
        $user->nomor_tlp = $request->nomor_tlp;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->status_akun = $request->status_akun;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return redirect('/users')->with('success','You have successfully registered users.');
        }
    }
}
