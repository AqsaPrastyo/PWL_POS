<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['stok_id' => 1, 'barang_id' => 1, 'stok_jumlah' => 10, 'supplier_id' => 1, 'user_id' => 1, 'stok_tanggal' => '2025-02-01'],
            ['stok_id' => 2, 'barang_id' => 2, 'stok_jumlah' => 20, 'supplier_id' => 1, 'user_id' => 1, 'stok_tanggal' => '2025-02-02'],
            ['stok_id' => 3, 'barang_id' => 3, 'stok_jumlah' => 30, 'supplier_id' => 1, 'user_id' => 1, 'stok_tanggal' => '2025-02-03'],
            ['stok_id' => 4, 'barang_id' => 4, 'stok_jumlah' => 40, 'supplier_id' => 2, 'user_id' => 2, 'stok_tanggal' => '2025-02-04'],
            ['stok_id' => 5, 'barang_id' => 5, 'stok_jumlah' => 50, 'supplier_id' => 2, 'user_id' => 2, 'stok_tanggal' => '2025-02-05'],
            ['stok_id' => 6, 'barang_id' => 6, 'stok_jumlah' => 60, 'supplier_id' => 2, 'user_id' => 2, 'stok_tanggal' => '2025-02-06'],
            ['stok_id' => 7, 'barang_id' => 7, 'stok_jumlah' => 70, 'supplier_id' => 3, 'user_id' => 3, 'stok_tanggal' => '2025-02-07'],
            ['stok_id' => 8, 'barang_id' => 8, 'stok_jumlah' => 80, 'supplier_id' => 3, 'user_id' => 3, 'stok_tanggal' => '2025-02-08'],
            ['stok_id' => 9, 'barang_id' => 9, 'stok_jumlah' => 90, 'supplier_id' => 3, 'user_id' => 3, 'stok_tanggal' => '2025-02-09'],
            ['stok_id' => 10, 'barang_id' => 10, 'stok_jumlah' => 100, 'supplier_id' => 1, 'user_id' => 1, 'stok_tanggal' => '2025-02-10'],
            ['stok_id' => 11, 'barang_id' => 11, 'stok_jumlah' => 110, 'supplier_id' => 2, 'user_id' => 2, 'stok_tanggal' => '2025-02-11'],
            ['stok_id' => 12, 'barang_id' => 12, 'stok_jumlah' => 120, 'supplier_id' => 3, 'user_id' => 3, 'stok_tanggal' => '2025-02-12'],
            ['stok_id' => 13, 'barang_id' => 13, 'stok_jumlah' => 130, 'supplier_id' => 1, 'user_id' => 1, 'stok_tanggal' => '2025-02-13'],
            ['stok_id' => 14, 'barang_id' => 14, 'stok_jumlah' => 140, 'supplier_id' => 2, 'user_id' => 2, 'stok_tanggal' => '2025-02-14'],
            ['stok_id' => 15, 'barang_id' => 15, 'stok_jumlah' => 150, 'supplier_id' => 3, 'user_id' => 3, 'stok_tanggal' => '2025-02-15'],
        ];

        DB::table('t_stok')->insert($data);
    }
}
