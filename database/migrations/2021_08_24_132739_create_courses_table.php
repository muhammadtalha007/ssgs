<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('year')->nullable();
            $table->string('city')->nullable();
            $table->string('start_date')->nullable();
            $table->string('finish_date')->nullable();
            $table->string('name')->nullable();
            $table->string('places')->nullable();
            $table->string('places_left')->nullable();
            $table->string('enable')->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
