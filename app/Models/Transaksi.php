<?php

namespace App\Models;
use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    use HasFormatRupiah;

    protected $table = "transaksi";
    protected $fillable = [
        'id_kasir',
        'nama_pelangan',
        'nama_menu',
        'jumlah_menu',
        'total_bayar',
        'metode_pembayaran',
        'status',
        'tgl'
    ];
    protected $primaryKey = "id_transaksi";
    public function users()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
