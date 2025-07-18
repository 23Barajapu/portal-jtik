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
            [ 'nama' => 'Rina Dewi', 'jabatan' => 'Tendik', 'foto' => 'vl-team-1.4.png', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama' => 'Agus Santoso', 'jabatan' => 'Tendik', 'foto' => 'vl-team-1.5.png', 'created_at' => now(), 'updated_at' => now() ],
        ]);
    }
}
