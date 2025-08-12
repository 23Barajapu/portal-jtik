<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TendikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('tendiks')->truncate();
        \DB::table('tendiks')->insert([
            [
                'nama' => 'Wulan Siti Nurul Masriah, S.E.',
                'nip' => '198508192021212000',
                'jabatan' => 'PLP',
                'prodi' => 'TENDIK',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Erin Tri Rezqi Maudy, A.Md.Kom',
                'nip' => '240100109',
                'jabatan' => 'Teknisi',
                'prodi' => 'TENDIK',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Cica Rismawanti, A.Md.Kom',
                'nip' => '199603122025062000',
                'jabatan' => 'Admin',
                'prodi' => 'TENDIK',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
