<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('family_business_name');
            $table->string('applicant_full_name');
            $table->String('applicant_role');
            $table->integer('industry_id');
            $table->integer('business_sector_id');
            $table->integer('business_generation_id');
            $table->integer('business_legal_form_id');
            $table->string('business_year_establishment');
            $table->string('nb_family_members');
            $table->string('nb_of_business_owner');
            $table->string('phone_number');
            $table->string('full_address');
            $table->string('email');

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
        Schema::dropIfExists('forms');
    }
}
