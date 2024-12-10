<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Menggunakan prepared statement untuk menyisipkan data pengguna ke dalam tabel users
        DB::insert('insert into users (name, email, password) values (?, ?, ?)', [
            'Test User',
            'test@example.com',
            Hash::make('password123'), // Menggunakan Hash::make untuk mengenkripsi password
        ]);
    }
}
