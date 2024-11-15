<?php
// app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',       // Nama produk
        'price',      // Harga produk
        'stock',      // Jumlah stok produk
        'description', // Deskripsi produk
    ];

    // Cast harga ke tipe decimal dan timestamps ke tipe datetime
    protected $casts = [
        'price' => 'decimal:2', 
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
