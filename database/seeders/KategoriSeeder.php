<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $data = [
            [  'kategori_kode' => 'KAT001', 'kategori_nama' => 'Makanan'],
            [  'kategori_kode' => 'KAT002', 'kategori_nama' => 'Minuman'],
            [  'kategori_kode' => 'KAT003', 'kategori_nama' => 'Snack'],
            [  'kategori_kode' => 'KAT004', 'kategori_nama' => 'Buah'],
            [  'kategori_kode' => 'KAT005', 'kategori_nama' => 'Sayur']
        ];

        DB::table('m_kategori')->insert($data);
    }
}
