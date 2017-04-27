<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTimatableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_timetable', function($table)
        {
            $table->increments('id');
            $table->string('email');
            $table->string('department');
            $table->string('level');
            $table->enum('semester', ['harmattan', 'rain'])->default('harmattan');
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
        Schema::drop('user_timetable');
    }
}
