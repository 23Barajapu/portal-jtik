<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CPLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('c_p_l_s')->truncate();
        \DB::table('c_p_l_s')->insert([
            // D3 Sistem Informasi (prodi_id = 1)
            [ 'prodi_id' => 1, 'deskripsi' => 'Mampu menganalisis kebutuhan dan proses bisnis', 'created_at' => now(), 'updated_at' => now() ],
            [ 'prodi_id' => 1, 'deskripsi' => 'Mengembangkan aplikasi berbasis web/mobile', 'created_at' => now(), 'updated_at' => now() ],
            [ 'prodi_id' => 1, 'deskripsi' => 'Mengelola database dan infrastruktur TI', 'created_at' => now(), 'updated_at' => now() ],
            [ 'prodi_id' => 1, 'deskripsi' => 'Beradaptasi dengan perkembangan teknologi', 'created_at' => now(), 'updated_at' => now() ],
            // D4 TRPL (prodi_id = 2)
            [ 'prodi_id' => 2, 'deskripsi' => 'Merancang dan membangun perangkat lunak skala besar', 'created_at' => now(), 'updated_at' => now() ],
            [ 'prodi_id' => 2, 'deskripsi' => 'Menguasai AI, IoT, dan teknologi cloud', 'created_at' => now(), 'updated_at' => now() ],
            [ 'prodi_id' => 2, 'deskripsi' => 'Mengelola proyek pengembangan perangkat lunak', 'created_at' => now(), 'updated_at' => now() ],
            [ 'prodi_id' => 2, 'deskripsi' => 'Berjiwa inovatif dan adaptif', 'created_at' => now(), 'updated_at' => now() ],
        ]);
    }
}
