<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Pengguna;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengguna::create([
            'username' => 'Admin',
            'password' => Hash::make('password'),
            'nama' => 'Admin',
            'type' => '1',
        ]);

        Pengguna::create([
            'username' => 'Karyawan',
            'password' => Hash::make('password'),
            'nama' => 'Karyawan',
            'type' => '0',
        ]);
    }
}
