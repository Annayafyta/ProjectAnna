<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Produk;
use App\Models\User;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'anna',
            'email' => 'an@gmail.com',
            'password' => bcrypt ('12345')

        ]);

        User::create([
            'name' => 'liam',
            'email' => 'iam@gmail.com',
            'password' => bcrypt('54321')
        ]);

        User::create([
            'name' => 'aky',
            'email' => 'ak@gmail.com',
            'password' => bcrypt('111')
        ]);
        Produk::create([
            'id' => 1,
           'name' => 'Gundam Exia',
            'category' => 'Mainan',
            'price' => 3000,
            'quantity' => 4,
            'image' => ''
        ]);

    }
}
