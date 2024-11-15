<?php
// database/seeders/ProductSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data produk skincare
        Products::create([
            'name' => 'Pelembab Wajah',
            'price' => 70000,
            'stock' => 50,
            'description' => 'Pelembab wajah untuk kulit kering',
        ]);

        Products::create([
            'name' => 'Serum Vitamin C',
            'price' => 90000,
            'stock' => 30,
            'description' => 'Serum dengan vitamin C untuk mencerahkan',
        ]);

        Products::create([
            'name' => 'Sunscreen SPF 50+',
            'price' => 65000,
            'stock' => 40,
            'description' => 'Suanscreen untuk perlindungan kulit dari sinar UV',
        ]);
    }
}
