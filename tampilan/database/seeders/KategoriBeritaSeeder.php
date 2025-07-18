<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriBeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('beritas')->delete();
        \DB::table('kategori_beritas')->delete();
        \DB::table('kategori_beritas')->insert([
            [ 'nama' => 'Kompetisi', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama' => 'Seminar', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama' => 'PKL', 'created_at' => now(), 'updated_at' => now() ],
        ]);
    }
}
