<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExhibitionProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exhibition_products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable(false);
            $table->string('product_condition_id')->nullable(false);
            $table->string('product_picture')->nullable(false);
            $table->string('product_explanation')->nullable(false);
            $table->string('brand_name')->nullable();
            $table->integer('product_price')->nullable(false);
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->nullable(false);
            $table->string('sold_out')->nullable();
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
        Schema::dropIfExists('exhibited_products');
    }
}
