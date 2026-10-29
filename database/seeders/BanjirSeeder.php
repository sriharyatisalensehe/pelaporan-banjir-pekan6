<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class BanjirSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin / Petugas Tanggap Darurat Tetap
        User::create([
            'name' => 'Admin Siaga Banjir',
            'email' => 'admin@banjir.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        // 2. Akun Warga Contoh
        User::create([
            'name' => 'Warga Pelapor',
            'email' => 'warga@banjir.com',
            'password' => Hash::make('password123'),
            'role' => 'citizen',
        ]);

        // 3. Akun Petugas Dummy menggunakan Faker id_ID
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 3; $i++) {
            User::create([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'password' => Hash::make('password123'),
                'role' => 'admin',
            ]);
        }
    }
}