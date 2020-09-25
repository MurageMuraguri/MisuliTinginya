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
            $table->bigIncrements('income_id');
            $table->string('income_name');
            $table->string('quantity');
            $table->string('price_per_unit');
            $table->string('ttl_price');
            $table->string('buyer_contact');
            $table->string('Date_of_production');
            $table->string('Date_of_sale');
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('users');
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
