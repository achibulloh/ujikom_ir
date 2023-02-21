<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = "barang";
    protected $fillable = [
        'nama_kategori',
        'nama_kategori',
        'nama_kategori',
        'nama_kategori'
    ];
    // https://github.com/mesinkasir/axcoracashierapp
}
