<?php
// database/migrations/2024_11_14_000000_create_products_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama produk
            $table->decimal('price', 10, 2); // Harga produk
            $table->integer('stock'); // Jumlah stok produk
            $table->text('description')->nullable(); // Deskripsi produk
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
