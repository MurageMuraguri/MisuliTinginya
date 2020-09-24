<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->bigIncrements('expenses_id');
            $table->string('expenses_name');
            $table->string('expenses_description');
            $table->string('expenses_date');
            $table->string('expenses_quantity');
            $table->string('expenses_cost_per_unit');
            $table->string('expenses_ttl_cost');
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
        Schema::dropIfExists('expenses');
    }
}
