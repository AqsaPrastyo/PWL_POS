<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_kode' => 'PNJ001', 'user_id' => 1, 'penjualan_tanggal' => '2025-02-01 10:00:00', 'pembeli' => 'John Doe'],
            ['penjualan_kode' => 'PNJ002', 'user_id' => 2, 'penjualan_tanggal' => '2025-02-02 12:00:00', 'pembeli' => 'Jane Smith'],
            ['penjualan_kode' => 'PNJ003', 'user_id' => 3, 'penjualan_tanggal' => '2025-02-03 14:00:00', 'pembeli' => 'Chris Johnson'],
            ['penjualan_kode' => 'PNJ004', 'user_id' => 1, 'penjualan_tanggal' => '2025-02-04 16:00:00', 'pembeli' => 'Patricia Brown'],
            ['penjualan_kode' => 'PNJ005', 'user_id' => 2, 'penjualan_tanggal' => '2025-02-05 18:00:00', 'pembeli' => 'Michael Green'],
            ['penjualan_kode' => 'PNJ006', 'user_id' => 3, 'penjualan_tanggal' => '2025-02-06 20:00:00', 'pembeli' => 'Emily White'],
            ['penjualan_kode' => 'PNJ007', 'user_id' => 1, 'penjualan_tanggal' => '2025-02-07 22:00:00', 'pembeli' => 'Daniel Black'],
            ['penjualan_kode' => 'PNJ008', 'user_id' => 2, 'penjualan_tanggal' => '2025-02-08 08:00:00', 'pembeli' => 'Sarah Blue'],
            ['penjualan_kode' => 'PNJ009', 'user_id' => 3, 'penjualan_tanggal' => '2025-02-09 10:00:00', 'pembeli' => 'David Yellow'],
            ['penjualan_kode' => 'PNJ010', 'user_id' => 1, 'penjualan_tanggal' => '2025-02-10 12:00:00', 'pembeli' => 'Jessica Red'],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
