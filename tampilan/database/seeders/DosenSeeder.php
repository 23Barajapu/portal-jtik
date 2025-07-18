<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('dosens')->truncate();
        \DB::table('dosens')->insert([
            [ 'nama' => 'Nunu Nugraha Purnawan, S.Pd., M.Kom.', 'nip' => '197909152015041001', 'jabatan' => '', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama' => 'Rian Piarna, S.E., M.M.', 'nip' => '198709032019031009', 'jabatan' => '', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama' => 'Dwi Vernanda, S.T., M.Pd.', 'nip' => '199104302019032018', 'jabatan' => '', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama' => 'Mohammad Iqbal, S.Kom., M.T.', 'nip' => '199001262019031025', 'jabatan' => '', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama' => 'Tri Herdiawan Apandi, S.ST., M.T.', 'nip' => '198801052019031008', 'jabatan' => '', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama' => 'Slamet Rahayu, S.Pd., M.Pd.', 'nip' => '170900045', 'jabatan' => '', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama' => 'Haryati, S.Pd., M.Pd.', 'nip' => '199306142019032021', 'jabatan' => '', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama' => 'Nurfitria Khoirunnisa, S.Tr.Kom., M.Kom.', 'nip' => '199603112020122022', 'jabatan' => '', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama' => 'Sari Azhariyah, S.Pd., M.Pd.T.', 'nip' => '199408182022032017', 'jabatan' => '', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama' => 'Taufan Abdurrachman, M.Kom.', 'nip' => '199311112022031006', 'jabatan' => '', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama' => 'Chepy Perdana, M.Pd.', 'nip' => '199109242022031001', 'jabatan' => '', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama' => 'Lani Nurlani, M.Kom.', 'nip' => '198804032022032002', 'jabatan' => '', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama' => 'Masesa Angga Wijaya, S.Kom., M.Kom.', 'nip' => '198808132022031004', 'jabatan' => '', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama' => 'Usep Abdul Rosid, S.T., M.Kom.', 'nip' => '198905122022031003', 'jabatan' => '', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama' => 'Erick Febriyanto, S.Kom, M.T.I.', 'nip' => '199002212024061001', 'jabatan' => '', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama' => 'Abd Rachman Mildan, M.Pd.', 'nip' => '198910182024061001', 'jabatan' => '', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama' => 'Agin Sugiwa, M.Ak.', 'nip' => '198909022024061001', 'jabatan' => '', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now() ],
        ]);
    }
}
