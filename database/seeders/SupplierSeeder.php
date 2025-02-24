<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_nama' => 'PT. A', 'supplier_alamat' => 'Jl. A', 'supplier_kode' => '02'],
            ['supplier_id' => 2, 'supplier_nama' => 'PT. B', 'supplier_alamat' => 'Jl. B', 'supplier_kode' => '01'],
            ['supplier_id' => 3, 'supplier_nama' => 'PT. C', 'supplier_alamat' => 'Jl. C', 'supplier_kode' => '08']
        ];

        DB::table('m_supplier')->insert($data);
    }
}
