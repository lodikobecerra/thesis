<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id('employee_num');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('position');
            $table->integer('age');
            $table->string('gender');
            $table->string('birth_month');
            $table->integer('birth_day');
            $table->integer('birth_year');
            $table->string('contact_number');
            $table->string('address');
            $table->string('status');
            $table->string('current_project')->nullable();
            $table->string('resume_file')->nullable();

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
        Schema::dropIfExists('teams');
    }
}
