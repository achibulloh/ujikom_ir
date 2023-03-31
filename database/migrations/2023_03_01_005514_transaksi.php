<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->integer('invoice');
            $table->foreignId('id_kasir')->references('id')->on('users')->onDelete('cascade');
            $table->string('nama_pelangan');
            $table->integer('jumlah_menu');
            $table->integer('total_bayar');
            $table->integer('uangtunai');
            $table->integer('change');
            $table->enum('metode_pembayaran',['Cash','Credit/Debit','Qris']);
            $table->enum('status',['pending','success','cencel']);
            $table->date('tgl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
};
