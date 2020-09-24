<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('income', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('product_name');
            $table->string('quantity');
            $table->string('price_per_unit');
            $table->string('ttl_price');
            $table->string('buyer_contact');
            $table->string('Date_of_production');
            $table->string('Date_of_sale');
            $table->unsignedBigInteger('User_id');
            $table->foreign('User_id')->references('User_id')->on('user');
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
        Schema::dropIfExists('income');
    }
}
