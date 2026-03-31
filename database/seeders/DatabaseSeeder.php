<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'nama' => 'Flaid Atmin',
            'email' => 'atmin@gmail.com',
            'jabatan' => 'Admin',
            'password' => Hash::make('12345678'),
            'is_tugas' => false,
        ]);
        User::create([
            'nama' => 'Ucup',
            'email' => 'ucup@gmail.com',
            'jabatan' => 'Karyawan',
            'password' => Hash::make('12345678'),
            'is_tugas' => false,
        ]);
        User::create([
            'nama' => 'Joko',
            'email' => 'joko@gmail.com',
            'jabatan' => 'Karyawan',
            'password' => Hash::make('12345678'),
            'is_tugas' => false,
        ]);
    }
}
