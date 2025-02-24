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
        Schema::create('t_stok', function (Blueprint $table) {
            $table->id('stok_id'); // Kolom id sebagai primary key otomatis
            $table->unsignedBigInteger('supplier_id'); // kolom supplier_id (foreign key)
            $table->unsignedBigInteger('barang_id'); // kolom barang_id (foreign key)
            $table->unsignedBigInteger('user_id'); // kolom user_id (foreign key)
            $table->dateTime('stok_tanggal'); // kolom stok_tanggal (datetime)
            $table->unsignedBigInteger('stok_jumlah'); // kolom stok_jumlah (integer)
            $table->timestamps(); // kolom created_at dan updated_at
            
            // Menambahkan foreign key (supplier_id merujuk ke tabel supplier)
            $table->foreign('supplier_id')->references('supplier_id')->on('m_supplier')->onDelete('cascade');
            
            // Menambahkan foreign key (barang_id merujuk ke tabel m_barang)
            $table->foreign('barang_id')->references('barang_id')->on('m_barang')->onDelete('cascade');
            
            // Menambahkan foreign key (user_id merujuk ke tabel users)
            $table->foreign('user_id')->references('user_id')->on('m_user')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_stok');
    }
};
