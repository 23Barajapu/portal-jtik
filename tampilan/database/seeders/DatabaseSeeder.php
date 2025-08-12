<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \DB::table('users')->truncate();
        // User::factory(10)->create();

        // Create admin user
        \App\Models\User::create([
            'name' => 'Admin JTIK',
            'email' => 'admin@jtik.polsub.ac.id',
            'password' => Hash::make('admin123'),
        ]);

        $this->call([
            KategoriBeritaSeeder::class,
            ProdiSeeder::class,
            MataKuliahSeeder::class,
            DosenSeeder::class,
            TendikSeeder::class,
            BeritaSeeder::class,
        ]);
    }
}
