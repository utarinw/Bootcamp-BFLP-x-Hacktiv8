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
        Schema::create('items_pesanan', function (Blueprint $table) {
            $table->increments('order_item_id');
            $table->unsignedInteger('order_id');
            $table->foreign('order_id')->references('order_id')->on('pesanan');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id')->references('product_id')->on('produk');
            $table->string('product_name');
            $table->integer('product_price')->default(0);
            $table->integer('qty')->default(0);
            $table->integer('subtotal')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items_pesanan');
    }
};
