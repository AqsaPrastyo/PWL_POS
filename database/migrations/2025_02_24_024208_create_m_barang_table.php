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
        Schema::create('m_barang', function (Blueprint $table) {
            $table->id('barang_id'); // Kolom id sebagai primary key otomatis
            $table->unsignedBigInteger('kategori_id'); // kolom kategori_id (foreign key)
            $table->string('barang_kode', 10); // kolom barang_kode (string, panjang 10)
            $table->string('barang_nama', 100); // kolom barang_nama (string, panjang 100)
            $table->integer('harga_jual'); // kolom harga_jual (integer)
            $table->integer('harga_beli'); // kolom harga_beli (integer)
            $table->timestamps(); // kolom created_at dan updated_at
            
            // Menambahkan foreign key (kategori_id merujuk ke tabel kategori)
            $table->foreign('kategori_id')->references('kategori_id')->on('m_kategori')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_barang');
    }
};
