<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('surname1');
            $table->string('surname2')->nullable();
            $table->string('birthdate');
            $table->string('dni');
            $table->string('phone');
            $table->string('address');
            $table->string('postalcode');
            $table->string('city');
            $table->string('province');
            $table->string('medication');
            $table->longText('medication_desc')->nullable();
            $table->string('allergies');
            $table->string('allergies_desc')->nullable();
            $table->string('foodintolerances');
            $table->longText('foodintolerances_desc')->nullable();
            $table->longText('other_information')->nullable();
            $table->string('school');
            $table->string('course');
            $table->string('english_score')->nullable();
            $table->integer('english_academy_years')->nullable();
            $table->string('english_latest_teacher')->nullable();
            $table->string('other_courses_abroad')->nullable();
            $table->string('datetime_register')->nullable();
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
        Schema::dropIfExists('students');
    }
}
