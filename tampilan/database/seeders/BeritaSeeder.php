<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('beritas')->truncate();
        \DB::table('beritas')->insert([
            [
                'judul' => 'Mahasiswa JTIK Raih Juara Nasional Hackathon 2024',
                'isi' => 'Tim mahasiswa JTIK berhasil meraih juara 1 pada ajang Hackathon tingkat nasional yang diadakan di Jakarta.',
                'ringkasan' => 'Tim mahasiswa JTIK berhasil meraih juara 1 pada ajang Hackathon tingkat nasional yang diadakan di Jakarta.',
                'gambar' => 'vl-blog-4.1.png',
                'tanggal' => '2024-10-10',
                'kategori_berita_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Seminar Nasional Teknologi Informasi 2024',
                'isi' => 'JTIK mengadakan seminar nasional dengan pembicara dari industri dan akademisi terkemuka di bidang TI.',
                'ringkasan' => 'JTIK mengadakan seminar nasional dengan pembicara dari industri dan akademisi terkemuka di bidang TI.',
                'gambar' => 'vl-blog-4.2.png',
                'tanggal' => '2024-09-02',
                'kategori_berita_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Pelepasan Mahasiswa PKL ke Industri Mitra',
                'isi' => 'Sebanyak 40 mahasiswa JTIK dilepas untuk melaksanakan PKL di berbagai perusahaan mitra industri.',
                'ringkasan' => 'Sebanyak 40 mahasiswa JTIK dilepas untuk melaksanakan PKL di berbagai perusahaan mitra industri.',
                'gambar' => 'vl-blog-4.3.png',
                'tanggal' => '2024-08-15',
                'kategori_berita_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
