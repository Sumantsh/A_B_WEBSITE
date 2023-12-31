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
            $table->timestamps();
            $table->string("prd_name");
            $table->string("prd_dis");
            $table->string("prd_image");
            $table->decimal("prd_min_price");
            $table->decimal("prd_max_price");

            $table->text("prd_about");
            $table->string("prd_qty");
            $table->string("prd_mg");
            $table->text("prd_details");
            $table->string("price_per_pill");
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
