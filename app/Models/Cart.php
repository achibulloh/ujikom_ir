<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = "cart";
    protected $fillable = [
        'id_kasir',
        'id_menu',
        'qty',
        'id_cart'
    ];

    protected $primaryKey = 'id_cart';

    // public function kategori()
    // {
    //     return $this->belongsTo(Kategori::class, 'id_kategori');
    // }
    // public function menu()
    // {
    //     return $this->hasMany(Menu::class, 'id_menu');
    // }
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }
}
