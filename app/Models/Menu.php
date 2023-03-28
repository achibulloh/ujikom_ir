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
        'price',
        'stok'
    ];

    protected $primaryKey = 'id_menu';

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
    public function cart()
    {
        return $this->belongsTo(Cart::class, 'id_cart');
    }
    static function detail_menu($id_menu) {
        $data = Menu::where('id_menu',$id_menu)->first();
        return $data;
    }
    // https://github.com/mesinkasir/axcoracashierapp
}
