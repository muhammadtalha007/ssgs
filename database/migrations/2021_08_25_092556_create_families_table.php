<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('familysurname');
            $table->string('city');
            $table->string('address');
            $table->string('postalcode');
            $table->string('phone');
            $table->string('pets');
            $table->string('pets_desc')->nullable();
            $table->string('student_gender_preference');
            $table->integer('student_number');
            $table->string('student_beds');
            $table->string('student_room');
            $table->string('student_wardrobe');
            $table->integer('house_bathrooms');
            $table->string('student_coeliac');
            $table->string('student_foodintolerance');
            $table->string('student_allergy');
            $table->string('adult1_name');
            $table->string('adult1_surname');
            $table->string('adult1_occupation');
            $table->string('adult2_name')->nullable();
            $table->string('adult2_surname')->nullable();
            $table->string('adult2_occupation')->nullable();
            $table->integer('house_children');
            $table->string('house_child1_name')->nullable();
            $table->string('house_child1_birthdate')->nullable();
            $table->string('house_child1_gender')->nullable();
            $table->string('house_child2_name')->nullable();
            $table->string('house_child2_birthdate')->nullable();
            $table->string('house_child2_gender')->nullable();
            $table->string('house_child3_name')->nullable();
            $table->string('house_child3_birthdate')->nullable();
            $table->string('house_child3_gender')->nullable();
            $table->longText('house_people')->nullable();
            $table->longText('other_information')->nullable();
            $table->longText('family_desc')->nullable();
            $table->string('bankdetails_IBAN');
            $table->string('bankdetails_SWIFT_BIC');
            $table->string('bankdetails_sortcode');
            $table->string('bankdetails_account_number');
            $table->string('datetime_register')->nullable();
            $table->string('datetime_updated_bankdetails')->nullable();
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
        Schema::dropIfExists('families');
    }
}
