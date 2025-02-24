<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [  'level_kode' => 'ADM', 'level_nama' => 'Admin'],
            [  'level_kode' => 'USR', 'level_nama' => 'User'],
            [  'level_kode' => 'STF', 'level_nama' => 'Star / kasir'],
        ];
        DB::table('m_level')->insert($data);
    }
}
