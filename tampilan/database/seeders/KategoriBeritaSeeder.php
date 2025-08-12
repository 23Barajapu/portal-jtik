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
        DB::table('kategori_beritas')->insert([
            [
                'nama' => 'Berita Kampus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Event & Seminar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Prestasi Mahasiswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Akademik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Penelitian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
