<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'username' => 'superadmin',
            'telp' => '081111111111',
            'alamat' => 'Jl. Super Admin, No.1, Jakarta Selatan',
            'image' => 'superadmin.jpg',
            'password' => Hash::make('superadmin'),
            'email_verified_at' => now(),
            'role' => 'super_admin',
        ]);

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'username' => 'adminuser',
            'telp' => '082222222222',
            'alamat' => 'Jl. Admin, No.2, Jakarta Barat',
            'image' => 'admin.jpg',
            'password' => Hash::make('admin'),
            'email_verified_at' => now(),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Dr. John Doe',
            'email' => 'johndoe@example.com',
            'username' => '1987567890123',
            'telp' => '083333333333',
            'alamat' => 'Jl. Dosen, No.3, Bandung',
            'image' => 'dosen.jpg',
            'password' => Hash::make('dosen'),
            'email_verified_at' => now(),
            'role' => 'dosen',
        ]);

        User::create([
            'name' => 'Prof. Jane Doe',
            'email' => 'kaprodi@example.com',
            'username' => '1974567890123',
            'telp' => '084444444444',
            'alamat' => 'Jl. Kaprodi, No.4, Surabaya',
            'image' => 'kaprodi.jpg',
            'password' => Hash::make('kaprodi'),
            'email_verified_at' => now(),
            'role' => 'kaprodi',
        ]);

        User::create([
            'name' => 'Student One',
            'email' => 'mahasiswa@example.com',
            'username' => '1234567890',
            'telp' => '085555555555',
            'alamat' => 'Jl. Mahasiswa, No.5, Yogyakarta',
            'image' => 'mahasiswa.jpg',
            'password' => Hash::make('mahasiswa'),
            'email_verified_at' => now(),
            'role' => 'mahasiswa',
        ]);
    }
}
