<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = "transaksi";
    protected $fillable = [
        'id_kasir',
        'nama_pelangan',
        'nama_menu',
        'jumlah_menu',
        'total_bayar',
        'metode_pembayaran',
        'status'
    ];
    protected $primaryKey = "id_transaksi";
}
