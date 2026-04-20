<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Masukkan data alat yang tadi hilang
        DB::table('alats')->insert([
            ['nama_alat' => 'Laptop', 'jumlah' => 10],
            ['nama_alat' => 'Mouse', 'jumlah' => 20],
            ['nama_alat' => 'Keyboard', 'jumlah' => 15],
        ]);

        // Masukkan data user admin
        DB::table('users')->insert([
            'name' => 'Anya',
            'email' => 'anya@gmail.com',
            'password' => bcrypt('password123'),
        ]);
    }
}