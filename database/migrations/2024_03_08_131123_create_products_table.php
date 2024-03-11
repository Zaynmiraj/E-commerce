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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('tag_id')->unsigned();
            $table->string('product_id')->unique();
            $table->string('product_name')->nullable();
            $table->string('product_slug')->nullable();
            $table->string('product_type')->nullable();
            $table->string('description')->nullable();
            $table->string('short_description')->nullable();
            $table->string('regular_price')->nullable();
            $table->string('sale_price')->nullable();
            $table->string('stock_quantity')->nullable();
            $table->enum('stock',['active', 'inactive'])->default('active');
            $table->string('sku')->nullable()->unique();
            $table->string('image')->nullable();
            $table->string('images')->nullable();
            $table->string('meta_tile')->nullable();
            $table->string('meta_description')->nullable();
            $table->enum('status',['draft', 'published', ''])->default('published');
            $table->date('publish_date')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};