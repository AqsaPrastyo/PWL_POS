<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'barang_id' => 1, 'jumlah' => 1, 'harga' => 10000],
            ['penjualan_id' => 1, 'barang_id' => 2, 'jumlah' => 1, 'harga' => 10000],
            ['penjualan_id' => 1, 'barang_id' => 3, 'jumlah' => 1, 'harga' => 10000],
            ['penjualan_id' => 2, 'barang_id' => 1, 'jumlah' => 1, 'harga' => 15000],
            ['penjualan_id' => 2, 'barang_id' => 2, 'jumlah' => 1, 'harga' => 15000],
            ['penjualan_id' => 2, 'barang_id' => 3, 'jumlah' => 1, 'harga' => 15000],
            ['penjualan_id' => 3, 'barang_id' => 1, 'jumlah' => 1, 'harga' => 15000],
            ['penjualan_id' => 3, 'barang_id' => 2, 'jumlah' => 1, 'harga' => 15000],
            ['penjualan_id' => 3, 'barang_id' => 3, 'jumlah' => 1, 'harga' => 15000],
            [ 'penjualan_id' => 4, 'barang_id' => 1, 'jumlah' => 1, 'harga' => 20000],
            [ 'penjualan_id' => 4, 'barang_id' => 2, 'jumlah' => 1, 'harga' => 20000],
            [ 'penjualan_id' => 4, 'barang_id' => 3, 'jumlah' => 1, 'harga' => 20000],
            [ 'penjualan_id' => 5, 'barang_id' => 1, 'jumlah' => 1, 'harga' => 25000],
            [ 'penjualan_id' => 5, 'barang_id' => 2, 'jumlah' => 1, 'harga' => 25000],
            [ 'penjualan_id' => 5, 'barang_id' => 3, 'jumlah' => 1, 'harga' => 25000],
            [ 'penjualan_id' => 6, 'barang_id' => 1, 'jumlah' => 1, 'harga' => 20000],
            [ 'penjualan_id' => 6, 'barang_id' => 2, 'jumlah' => 1, 'harga' => 20000],
            [ 'penjualan_id' => 6, 'barang_id' => 3, 'jumlah' => 1, 'harga' => 20000],
            [ 'penjualan_id' => 7, 'barang_id' => 1, 'jumlah' => 1, 'harga' => 10000],
            [ 'penjualan_id' => 7, 'barang_id' => 2, 'jumlah' => 1, 'harga' => 10000],
            [ 'penjualan_id' => 7, 'barang_id' => 3, 'jumlah' => 1, 'harga' => 10000],
            [ 'penjualan_id' => 8, 'barang_id' => 1, 'jumlah' => 1, 'harga' => 20000],
            [ 'penjualan_id' => 8, 'barang_id' => 2, 'jumlah' => 1, 'harga' => 20000],
            [ 'penjualan_id' => 8, 'barang_id' => 3, 'jumlah' => 1, 'harga' => 20000],
            [ 'penjualan_id' => 9, 'barang_id' => 1, 'jumlah' => 1, 'harga' => 22500],
            [ 'penjualan_id' => 9, 'barang_id' => 2, 'jumlah' => 1, 'harga' => 22500],
            [ 'penjualan_id' => 9, 'barang_id' => 3, 'jumlah' => 1, 'harga' => 22500],
            [ 'penjualan_id' => 10, 'barang_id' => 1, 'jumlah' => 1, 'harga' => 30000],
            [ 'penjualan_id' => 10, 'barang_id' => 2, 'jumlah' => 1, 'harga' => 30000],
            [ 'penjualan_id' => 10, 'barang_id' => 3, 'jumlah' => 1, 'harga' => 30000],
        ];

        DB::table('t_penjualan_detail')->insert($data);
    }
}
