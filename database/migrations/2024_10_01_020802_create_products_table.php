<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id'); // Define the foreign key column
            $table->foreign('category_id')->references('id')->on('product_categories')->onDelete('cascade');
            $table->string('sku')->nullable();
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('price')->nullable();
            $table->string('old_price')->nullable();
            $table->string('status')->nullable();
            $table->string('schedule_date')->nullable();
            $table->string('schedule_time')->nullable();
            $table->string('tags')->nullable();
            $table->string('stock')->nullable();
            $table->string('url')->nullable();
            $table->string('coupon')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
