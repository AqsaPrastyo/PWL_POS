<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('t_penjualan_detail', function (Blueprint $table) {
        $table->id('detail_id'); // Kolom id sebagai primary key otomatis
        $table->unsignedBigInteger('penjualan_id'); // kolom penjualan_id (foreign key)
        $table->unsignedBigInteger('barang_id'); // kolom barang_id (foreign key)
        $table->integer('harga'); // kolom harga (integer)
        $table->integer('jumlah'); // kolom jumlah (integer)
        $table->timestamps(); // kolom created_at dan updated_at
        
        // Menambahkan foreign key (penjualan_id merujuk ke tabel t_penjualan)
        $table->foreign('penjualan_id')->references('penjualan_id')->on('t_penjualan')->onDelete('cascade');
        
        // Menambahkan foreign key (barang_id merujuk ke tabel m_barang)
        $table->foreign('barang_id')->references('barang_id')->on('m_barang')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan_detail');
    }
};
