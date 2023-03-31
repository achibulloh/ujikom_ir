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
        ],
        [
            'nama_kategori' => 'Coffe'
        ],]);
        DB::table('menu')->insert([[
            'photo_menu' => 'photo/beef-burger.png',
            'nama_menu' => 'Beef Burger',
            'id_kategori' => '1',
            'harga' => '25000',
            'stok' => '23'
        ],
        [
            'photo_menu' => 'photo/choco-glaze-donut.png',
            'nama_menu' => 'Glaze Donut',
            'id_kategori' => '3',
            'harga' => '10000',
            'stok' => '23'
        ],
        [
            'photo_menu' => 'photo/choco-glaze-donut-peanut.png',
            'nama_menu' => 'Donut Peanut',
            'id_kategori' => '3',
            'harga' => '10000',
            'stok' => '23'
        ],
        [
            'photo_menu' => 'photo/cinnamon-roll.png',
            'nama_menu' => 'Cinnamon-roll',
            'id_kategori' => '3',
            'harga' => '10000',
            'stok' => '23'
        ],
        [
            'photo_menu' => 'photo/croissant.png',
            'nama_menu' => 'Croissant',
            'id_kategori' => '3',
            'harga' => '10000',
            'stok' => '23'
        ],
        [
            'photo_menu' => 'photo/red-glaze-donut.png',
            'nama_menu' => 'Red Glaze Donut',
            'id_kategori' => '3',
            'harga' => '10000',
            'stok' => '23'
        ],
        [
            'photo_menu' => 'photo/sandwich.png',
            'nama_menu' => 'Sandwich',
            'id_kategori' => '3',
            'harga' => '10000',
            'stok' => '23'
        ],
        [
            'photo_menu' => 'photo/sawarma.png',
            'nama_menu' => 'Sawarma',
            'id_kategori' => '3',
            'harga' => '10000',
            'stok' => '23'
        ],
        [
            'photo_menu' => 'photo/coffee-latte.png',
            'nama_menu' => 'Coffee Latte',
            'id_kategori' => '4',
            'harga' => '10000',
            'stok' => '23'
        ],
        [
            'photo_menu' => 'photo/ice-chocolate.png',
            'nama_menu' => 'Ice Chocolate',
            'id_kategori' => '2',
            'harga' => '10000',
            'stok' => '23'
        ],
        [
            'photo_menu' => 'photo/ice-tea.png',
            'nama_menu' => 'Ice Tea',
            'id_kategori' => '2',
            'harga' => '10000',
            'stok' => '23'
        ],
        [
            'photo_menu' => 'photo/matcha-latte.png',
            'nama_menu' => 'Matcha Latte',
            'id_kategori' => '2',
            'harga' => '10000',
            'stok' => '23'
        ],
        [
            'photo_menu' => 'photo/LogoOnly.png',
            'nama_menu' => 'Nasi Goreng',
            'id_kategori' => '1',
            'harga' => '15000',
            'stok' => '23'
        ],
        [
            'photo_menu' => 'photo/LogoOnly.png',
            'nama_menu' => 'Nasi Ayam',
            'id_kategori' => '1',
            'harga' => '15000',
            'stok' => '23'
        ],
        [
            'photo_menu' => 'photo/LogoOnly.png',
            'nama_menu' => 'Ayam Geprek',
            'id_kategori' => '1',
            'harga' => '15000',
            'stok' => '23'
        ],
        [
            'photo_menu' => 'photo/LogoOnly.png',
            'nama_menu' => 'Ayam Penyet',
            'id_kategori' => '1',
            'harga' => '15000',
            'stok' => '23'
        ],
        [
            'photo_menu' => 'photo/LogoOnly.png',
            'nama_menu' => 'Coffe',
            'id_kategori' => '2',
            'harga' => '15000',
            'stok' => '23'
        ],
        [
            'photo_menu' => 'photo/LogoOnly.png',
            'nama_menu' => 'Teh Manis',
            'id_kategori' => '2',
            'harga' => '5000',
            'stok' => '23'
        ],
        [
            'photo_menu' => 'photo/LogoOnly.png',
            'nama_menu' => 'Aqua Botol',
            'id_kategori' => '2',
            'harga' => '15000',
            'stok' => '23'
        ],
        [
            'photo_menu' => 'photo/LogoOnly.png',
            'nama_menu' => 'Cireng',
            'id_kategori' => '3',
            'harga' => '15000',
            'stok' => '23'
        ],
        [
            'photo_menu' => 'photo/LogoOnly.png',
            'nama_menu' => 'Tahu Krispi',
            'id_kategori' => '3',
            'harga' => '15000',
            'stok' => '23'
        ],
        [
            'photo_menu' => 'photo/LogoOnly.png',
            'nama_menu' => 'Tempe Mendoan',
            'id_kategori' => '3',
            'harga' => '15000',
            'stok' => '23'
        ],]);
    }
}
