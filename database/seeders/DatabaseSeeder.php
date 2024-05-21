<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Warga;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        mahasiswa::create([
            'nama' => 'sulhamzah',
            'nik' => '1479816491604',
            'no_kk' => '1479816491604',
            'jeniskelamin' => 'L',
            'alamat' => '1479816491604',

        ]);

        mahasiswa::create([
            'nama' => 'jono',
            'nik' => '147981649160',
            'no_kk' => '147981649160',
            'jeniskelamin' => 'P',
            'alamat' => '147981649160',

        ]);

        mahasiswa::create([
            'nama' => 'vino',
            'nik' => '14798164916',
            'no_kk' => '1479816491604',
            'jeniskelamin' => 'L',
            'alamat' => '147981649',

        ]);
        mahasiswa::create([
            'nama' => 'budi',
            'nik' => '14798164916',
            'no_kk' => '1479816491604',
            'jeniskelamin' => 'P',
            'alamat' => '147981649',

        ]);
        mahasiswa::create([
            'nama' => 'marwoto',
            'nik' => '14798164916',
            'no_kk' => '1479816491604',
            'jeniskelamin' => 'L',
            'alamat' => '147981649',

        ]);
        mahasiswa::create([
            'nama' => 'udin',
            'nik' => '14798164916',
            'no_kk' => '1479816491604',
            'jeniskelamin' => 'P',
            'alamat' => '147981649',

        ]);











    }
}
