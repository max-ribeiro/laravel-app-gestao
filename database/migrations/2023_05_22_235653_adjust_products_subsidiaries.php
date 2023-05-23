<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdjustProductsSubsidiaries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Subsidiary Table
        Schema::create('subsidiaries', function(Blueprint $table) {
            $table->id();
            $table->string('subsidiary', 30);
            $table->timestamps();
        });
        //Aux Table
        Schema::create('products_subsidiaries', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subsidiary_id');
            $table->unsignedBigInteger('product_id');
            $table->decimal('price', 8, 2);
            $table->integer('min');
            $table->integer('max');
            $table->timestamps();

            $table->foreign('subsidiary_id')->references('id')->on('subsidiaries');
            $table->foreign('product_id')->references('id')->on('products');
        });
        //Remove the columns from products table
        Schema::table('products', function(Blueprint $table) {
            $table->dropColumn(['price', 'min', 'max']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function(Blueprint $table) {
            $table->float('price', 8, 2)->default(0.00);
            $table->integer('min')->default(1);
            $table->integer('max')->default(1);
        });

        Schema::dropIfExists('products_subsidiaries');
        Schema::dropIfExists('subsidiaries');
    }
}
