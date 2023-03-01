<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    protected $table = "menu";
    protected $fillable = [
        'photo_menu',
        'nama_menu',
        'id_kategori',
        'harga',
        'stok'
    ];
    // https://github.com/mesinkasir/axcoracashierapp
}
