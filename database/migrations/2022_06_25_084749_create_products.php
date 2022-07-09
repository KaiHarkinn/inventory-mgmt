<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string("name");
            $table->unsignedMediumInteger("unit_prize");
            $table->unsignedInteger("total_quantity");
            $table->unsignedBigInteger("supplier_id");
            $table->unsignedBiginteger("category_id");
            $table->timestamps();
            $table->foreign('supplier_id')
                ->references('id')
                ->on('suppliers');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories');
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
};
