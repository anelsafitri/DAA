<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Jalankan RoleSeeder terlebih dahulu
        $this->call([RoleSeeder::class]);

        // Seed pengguna setelah role dibuat
        $this->seedUsers();

        // Jalankan seeder tambahan untuk produk dan pesanan
        $this->call([
            
            ProductsSeeder::class,
            AdminSeeder::class,
        ]);
    }

    private function seedUsers(): void
    {
        // Buat Admin user jika belum ada
        $adminEmail = 'admin@admin.com';
        if (! User::where('email', $adminEmail)->exists()) {
            $admin = User::create([
                'name' => 'Admin',
                'email' => $adminEmail,
                'password' => bcrypt('password'),
            ]);
            $admin->assignRole('super_admin');
        }

    }
}
