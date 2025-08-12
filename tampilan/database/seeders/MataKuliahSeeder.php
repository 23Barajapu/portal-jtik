<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil id prodi D3 dan D4 dari database
        $prodiD3 = DB::table('prodis')->where('jenjang', 'D3')->first();
        $prodiD4 = DB::table('prodis')->where('jenjang', 'D4')->first();
        if (!$prodiD3 || !$prodiD4) return;

        $d3 = [
            ['kode' => 'PMU0001', 'nama' => 'Pendidikan Agama'],
            ['kode' => 'PMU0002', 'nama' => 'Pendidikan Pancasila'],
            ['kode' => 'PMU0003', 'nama' => 'Pendidikan Kewarganegaraan'],
            ['kode' => 'PMU0004', 'nama' => 'Bahasa Indonesia'],
            ['kode' => 'PMU0005', 'nama' => 'Bahasa Inggris'],
            ['kode' => 'PMU0006', 'nama' => 'Kewirausahaan'],
            ['kode' => 'PMI0001', 'nama' => 'Bahasa Inggris Teknis 1'],
            ['kode' => 'PMI0002', 'nama' => 'Bahasa Inggris Teknis 2'],
            ['kode' => 'PMI0003', 'nama' => 'Etika Profesi'],
            ['kode' => 'PMI0004', 'nama' => 'Projek 1'],
            ['kode' => 'PMI0005', 'nama' => 'Projek 2'],
            ['kode' => 'PMI0006', 'nama' => 'Praktek Kerja Lapangan'],
            ['kode' => 'PMI0007', 'nama' => 'Proyek Akhir'],
            ['kode' => 'PSI3101', 'nama' => 'Pengolahan Data dan Informasi'],
            ['kode' => 'PSI3102', 'nama' => 'Pengantar Teknologi Infromasi dan Komunikasi'],
            ['kode' => 'PSI3103', 'nama' => 'Matematika Diskrit'],
            ['kode' => 'PSI3104', 'nama' => 'Pemrograman Dasar 1'],
            ['kode' => 'PSI3201', 'nama' => 'Komunikasi Teknis'],
            ['kode' => 'PSI3202', 'nama' => 'Matematika Terapan'],
            ['kode' => 'PSI3203', 'nama' => 'Sistem Operasi'],
            ['kode' => 'PSI3204', 'nama' => 'Pemrograman Dasar 2'],
            ['kode' => 'PSI3205', 'nama' => 'Manajemen'],
            ['kode' => 'PSI3206', 'nama' => 'Pengantar Akuntansi'],
            ['kode' => 'PSI3301', 'nama' => 'Pemrograman Berbasis Objek'],
            ['kode' => 'PSI3302', 'nama' => 'Basis Data 1'],
            ['kode' => 'PSI3303', 'nama' => 'Sistem Informasi Manajemen'],
            ['kode' => 'PSI3304', 'nama' => 'Sistem Informasi Akuntansi'],
            ['kode' => 'PSI3305', 'nama' => 'Statistik dan Probabilitas'],
            ['kode' => 'PSI3306', 'nama' => 'Komunikasi Data dan Jaringan'],
            ['kode' => 'PSI3401', 'nama' => 'Analisis dan Perancangan Sistem Informasi 1'],
            ['kode' => 'PSI3402', 'nama' => 'Basis Data 2'],
            ['kode' => 'PSI3403', 'nama' => 'Pemrograman Web'],
            ['kode' => 'PSI3404', 'nama' => 'Data Mining'],
            ['kode' => 'PSI3501', 'nama' => 'Analisis dan Perancangan Sistem Informasi 2'],
            ['kode' => 'PSI3502', 'nama' => 'Data Warehouse'],
            ['kode' => 'PSI3503', 'nama' => 'Sistem Pengambil Keputusan'],
            ['kode' => 'PSI3504', 'nama' => 'Perancangan Antar Muka'],
            ['kode' => 'PSI3601', 'nama' => 'E-Commerce'],
            ['kode' => 'PSI3602', 'nama' => 'Manajemen Proyek'],
        ];
        $d4 = $d3;
        foreach ($d3 as $mk) {
            DB::table('mata_kuliahs')->insert([
                'nama' => $mk['nama'],
                'kode' => $mk['kode'],
                'sks' => 3,
                'semester' => 1,
                'prodi_id' => $prodiD3->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        foreach ($d4 as $mk) {
            DB::table('mata_kuliahs')->insert([
                'nama' => $mk['nama'],
                'kode' => $mk['kode'],
                'sks' => 3,
                'semester' => 1,
                'prodi_id' => $prodiD4->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
} 