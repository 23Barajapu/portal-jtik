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
            ['nama' => 'Dwi Vernanda, S.T., M.Pd.', 'nip' => '199104302019032000', 'jabatan' => 'Ketua Jurusan', 'prodi' => 'SI', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Haryati, S.Pd., M.Pd.', 'nip' => '199306142019032000', 'jabatan' => 'Sekretaris Jurusan', 'prodi' => 'TRPL', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Lani Nurlani, S.T., M.Kom.', 'nip' => '198804032020032000', 'jabatan' => 'Kaprodi SI', 'prodi' => 'SI', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Nunu Nugraha P., S.Pd., M.Kom', 'nip' => '197909152015041001', 'jabatan' => 'Dosen', 'prodi' => 'SI', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Rian Piarna, S.E., M.M.', 'nip' => '198709032019031009', 'jabatan' => 'Ka Lab MDI', 'prodi' => 'SI', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Slamet Rahayu, S.Pd., M.Pd.', 'nip' => '170900045', 'jabatan' => 'Ka Lab JARKOM', 'prodi' => 'SI', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Sari Azhariyah, S.Pd., M.Pd.T.', 'nip' => '199408182022032000', 'jabatan' => 'Ka Lab RPL', 'prodi' => 'SI', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Chepy Perdana, S.Kom., M.Pd', 'nip' => '199109242022031000', 'jabatan' => 'Ka Lab UX', 'prodi' => 'SI', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Usep Abdul Rosid, S.T., M.Kom.', 'nip' => '198905122022031000', 'jabatan' => 'Dosen', 'prodi' => 'SI', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Masesa Angga Wijaya, S.Kom., M.Kom.', 'nip' => '198808132022031000', 'jabatan' => 'Dosen', 'prodi' => 'SI', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Abd Rachman Mildan, M.Pd', 'nip' => '198910182024061000', 'jabatan' => 'Dosen', 'prodi' => 'SI', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Rahmat Irsyada, M.Pd', 'nip' => '', 'jabatan' => 'Dosen', 'prodi' => 'SI', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Mohammad Iqbal, S.Kom., M.T.', 'nip' => '199001262019031000', 'jabatan' => 'Kaprodi TRPL', 'prodi' => 'TRPL', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Taufan Abdurrachman, S.T., M.Kom.', 'nip' => '199311112022031000', 'jabatan' => 'Ka Lab SI', 'prodi' => 'TRPL', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Nurfitria Khoirunnisa, S.Tr.Kom., M.Kom.', 'nip' => '199603112020122000', 'jabatan' => 'Dosen', 'prodi' => 'TRPL', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Tri Herdiawan A., S.ST., M.T.', 'nip' => '198801052019031000', 'jabatan' => 'Dosen', 'prodi' => 'TRPL', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Erick Febriyanto, S.Kom., M.T.I.', 'nip' => '199002212024061000', 'jabatan' => 'Dosen', 'prodi' => 'TRPL', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Willy Muhammad Fauzi, S.T., M.Kom.', 'nip' => '199004252022031000', 'jabatan' => 'Dosen', 'prodi' => 'TRPL', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Agin Sugiwa M.Ak', 'nip' => '198909022024061000', 'jabatan' => 'Dosen', 'prodi' => 'Akuntansi', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Arief budiman, M.Ak', 'nip' => '199107252022031000', 'jabatan' => 'Dosen', 'prodi' => 'Akuntansi', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Liandy L Tobing, S.Pd., M.M.', 'nip' => '199104122022031000', 'jabatan' => 'Dosen', 'prodi' => 'TRPL', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ardhi Akmahudin Jadhira, S.Kom., M.Kom.', 'nip' => '199601132022056000', 'jabatan' => 'Dosen', 'prodi' => 'TRPL', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Gilang Anka Dilang, S.Pd., M.M', 'nip' => '199601222022056000', 'jabatan' => 'Dosen', 'prodi' => 'TRPL', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Rian Hermawan, S.Kom.,M.Kom', 'nip' => '199601222022056000', 'jabatan' => 'Dosen', 'prodi' => 'TRPL', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Herdawati, S.E., M.Sc.', 'nip' => '199703222022031000', 'jabatan' => 'Dosen', 'prodi' => 'TRPL', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Khaida Hamam, S.Pd., M.Ak.', 'nip' => '199703222022031000', 'jabatan' => 'Dosen', 'prodi' => 'TRPL', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Muhammad Juwiansah Abdullah, S.Pd.,M.Pd', 'nip' => '199703222022031000', 'jabatan' => 'Dosen', 'prodi' => 'TRPL', 'foto' => null, 'bidang_keahlian' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
