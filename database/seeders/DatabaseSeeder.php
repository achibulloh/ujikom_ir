<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = [ [
            'username' => 'Admin',
            'nama_lengkap' => 'AdminBebas',
            'jenis_kelamin' => 'L',
            'alamat' => 'burangrang No.31 nomor 20',
            'nomor_tlp' => '085721077423',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@gmail.com'),
            'status_akun' => 'active',
            'role' => 'admin'
        ],
        [
            'username' => 'Kasir',
            'nama_lengkap' => 'KasirAdaAja',
            'jenis_kelamin' => 'L',
            'alamat' => 'simlim no 1',
            'nomor_tlp' => '0812345678',
            'email' => 'kasir@gmail.com',
            'password' => Hash::make('kasir@gmail.com'),
            'status_akun' => 'active',
            'role' => 'kasir'
        ],
    ];
            foreach($user as $key => $value){
            User::create($value);
        }
        DB::table('kategori')->insert([[
            'nama_kategori' => 'Makanan'
        ],
        [
            'nama_kategori' => 'Minuman'
        ],
        [
            'nama_kategori' => 'Cemilan'
        ],]);
        DB::table('menu')->insert([[
            'nama_menu' => 'Nasi Goreng',
            'id_kategori' => '1',
            'harga' => '15000',
            'stok' => '23'
        ],
        [
            'nama_menu' => 'Nasi Ayam',
            'id_kategori' => '1',
            'harga' => '15000',
            'stok' => '23'
        ],
        [
            'nama_menu' => 'Ayam Geprek',
            'id_kategori' => '1',
            'harga' => '15000',
            'stok' => '23'
        ],
        [
            'nama_menu' => 'Ayam Penyet',
            'id_kategori' => '1',
            'harga' => '15000',
            'stok' => '23'
        ],
        [
            'nama_menu' => 'Coffe',
            'id_kategori' => '2',
            'harga' => '15000',
            'stok' => '23'
        ],
        [
            'nama_menu' => 'Teh Manis',
            'id_kategori' => '2',
            'harga' => '5000',
            'stok' => '23'
        ],
        [
            'nama_menu' => 'Aqua Botol',
            'id_kategori' => '2',
            'harga' => '15000',
            'stok' => '23'
        ],
        [
            'nama_menu' => 'Cireng',
            'id_kategori' => '3',
            'harga' => '15000',
            'stok' => '23'
        ],
        [
            'nama_menu' => 'Tahu Krispi',
            'id_kategori' => '3',
            'harga' => '15000',
            'stok' => '23'
        ],
        [
            'nama_menu' => 'Tempe Mendoan',
            'id_kategori' => '3',
            'harga' => '15000',
            'stok' => '23'
        ],]);
    }
}
