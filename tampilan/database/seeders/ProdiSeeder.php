<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prodis')->insert([
            [
                'nama' => 'Sistem Informasi',
                'jenjang' => 'D3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Teknologi Rekayasa Perangkat Lunak',
                'jenjang' => 'D4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
