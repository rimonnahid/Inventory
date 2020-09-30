<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvancesalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advancesalaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->string('date')->nullable();
            $table->string('month')->nullable();
            $table->string('status')->nullable();
            $table->string('year')->nullable();
            $table->string('advance_salary')->nullable();
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
        Schema::dropIfExists('advancesalaries');
    }
}
