<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [ 'kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Turkey legs', 'harga_jual' => 10000000, 'harga_beli' => 7000],
            [ 'kategori_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Golden Salmon', 'harga_jual' => 15000000, 'harga_beli' => 7000],
            [ 'kategori_id' => 2, 'barang_kode' => 'BRG003', 'barang_nama' => 'Mojito Everest', 'harga_jual' => 50000, 'harga_beli' => 70000],
            [ 'kategori_id' => 2, 'barang_kode' => 'BRG004', 'barang_nama' => 'Holly water', 'harga_jual' => 100000, 'harga_beli' => 70000],
            [ 'kategori_id' => 3, 'barang_kode' => 'BRG005', 'barang_nama' => 'Tortila', 'harga_jual' => 2000000, 'harga_beli' => 70000],
            [ 'kategori_id' => 3, 'barang_kode' => 'BRG006', 'barang_nama' => 'Weci', 'harga_jual' => 500000, 'harga_beli' => 7000],
            [ 'kategori_id' => 4, 'barang_kode' => 'BRG007', 'barang_nama' => 'Dragon Fruit', 'harga_jual' => 50000, 'harga_beli' => 70000],
            [ 'kategori_id' => 4, 'barang_kode' => 'BRG008', 'barang_nama' => 'Snake Fruit', 'harga_jual' => 200000, 'harga_beli' => 70000],
            [ 'kategori_id' => 5, 'barang_kode' => 'BRG009', 'barang_nama' => 'Enoki', 'harga_jual' => 500000, 'harga_beli' => 70000],
            [  'kategori_id' => 5, 'barang_kode' => 'BRG010', 'barang_nama' => 'Eggplant', 'harga_jual' => 300000, 'harga_beli' => 7000],
            [  'kategori_id' => 1, 'barang_kode' => 'BRG011', 'barang_nama' => 'Chicken wings', 'harga_jual' => 5000000, 'harga_beli' => 70000],
            [  'kategori_id' => 1, 'barang_kode' => 'BRG012', 'barang_nama' => 'Beef ribs', 'harga_jual' => 10000000, 'harga_beli' => 7000],
            [  'kategori_id' => 2, 'barang_kode' => 'BRG013', 'barang_nama' => 'Pepsi', 'harga_jual' => 50000, 'harga_beli' => 70000],
            [  'kategori_id' => 2, 'barang_kode' => 'BRG014', 'barang_nama' => 'Coke', 'harga_jual' => 100000, 'harga_beli' => 70000],
            [  'kategori_id' => 3, 'barang_kode' => 'BRG015', 'barang_nama' => 'Burito', 'harga_jual' => 2000000, 'harga_beli' => 70000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
