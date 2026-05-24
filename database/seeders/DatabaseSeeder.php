<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Karyawan;
use App\Models\AnakAsuh;
use App\Models\KegiatanAnak;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Seed Users
        $admin = User::create([
            'name' => 'Admin Yayasan',
            'email' => 'admin@yayasan.com',
            'password' => Hash::make('123'),
            'role' => 'admin',
        ]);

        $pengurus = User::create([
            'name' => 'Pengurus Satu',
            'email' => 'pengurus@yayasan.com',
            'password' => Hash::make('123'),
            'role' => 'pengurus',
        ]);

        $karyawanUser = User::create([
            'name' => 'Budi Karyawan',
            'email' => 'budi@yayasan.com',
            'password' => Hash::make('123'),
            'role' => 'karyawan',
        ]);

        // 2. Seed Karyawan
        Karyawan::create([
            'user_id' => $karyawanUser->id,
            'nip' => '12345678',
            'nama_lengkap' => 'Budi Karyawan',
            'jabatan' => 'Juru Masak',
            'jenis_kelamin' => 'L',
            'no_hp' => '08123456789',
        ]);

        // 3. Seed Anak Asuh
        AnakAsuh::create([
            'nomor_induk' => 'A001',
            'nama_lengkap' => 'Andi Pratama',
            'jenis_kelamin' => 'L',
            'tanggal_lahir' => '2015-05-10',
            'status_anak' => 'Yatim',
            'tanggal_masuk' => '2022-01-01',
        ]);

        // 4. Seed Kegiatan Anak
        KegiatanAnak::create([
            'nama_kegiatan' => 'Mengaji Sore',
            'jam_mulai' => '16:00:00',
        ]);
    }
}
