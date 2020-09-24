<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->bigIncrements('Employee_id');
            $table->string('Emp_name');
            $table->string('Emp_role');
            $table->string('Emp_contact');
            $table->date('Date_of_hiring');
            $table->string('id_number')->unique();
            $table->text('Passport_photo');
            $table->string('salary');
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
        Schema::dropIfExists('employee');
    }
}
