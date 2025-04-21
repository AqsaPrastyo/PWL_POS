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
    Schema::create('t_penjualan', function (Blueprint $table) {
        $table->id('penjualan_id'); // Kolom id sebagai primary key otomatis
        $table->unsignedBigInteger('user_id'); // kolom user_id (foreign key)
        $table->string('penjualan_kode', 50); // kolom penjualan_kode (string, panjang 50)
        $table->string('pembeli', 50); // kolom pembeli (string, panjang 50)
        $table->dateTime('penjualan_tanggal'); // kolom penjualan_tanggal (datetime)
        $table->integer('total_harga')->default(0); // kolom total_harga (integer, default 0)
        $table->timestamps(); // kolom created_at dan updated_at
        
        // Menambahkan foreign key (user_id merujuk ke tabel users)
        $table->foreign('user_id')->references('user_id')->on('m_user');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan');
    }
};
