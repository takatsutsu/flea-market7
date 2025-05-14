<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->nullable(false);
            $table->foreignId('exhibition_product_id')->constrained()->cascadeOnDelete()->nullable(false);
            $table->string('payment_method_id')->nullable(false);
            $table->string('delivery_postal_code', 10)->nullable(false);
            $table->string('delivery_address')->nullable(false);
            $table->string('delivery_building_name')->nullable(false);
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
        Schema::dropIfExists('purchased_products');
    }
}
