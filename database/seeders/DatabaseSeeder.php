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
    }
}
