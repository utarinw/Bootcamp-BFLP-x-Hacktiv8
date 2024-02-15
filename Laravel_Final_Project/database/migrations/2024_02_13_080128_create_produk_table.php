<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('name', 100);
            $table->text('description');
            $table->enum('status', ['draft', 'published']);
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('category_id')->on('kategori')->onDelete('cascade');
            $table->integer('price')->default(0);
            $table->integer('weight')->default(0);
            $table->string('img_url', 150)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
