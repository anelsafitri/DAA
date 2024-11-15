<?php
// database/seeders/AdminSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data admin
        Admin::updateOrCreate(
            ['email' => 'admin@skincare.com'], // Matching criteria
            [
                'password' => bcrypt('password'), // Replace with your hashed password
                'role' => 'admin',
            ]
        );
    }
}
