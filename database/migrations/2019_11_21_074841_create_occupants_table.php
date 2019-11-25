<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccupantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occupants', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_primer')->nullable()->default(0);
            $table->string('f_name', 100)->nullable();
            $table->string('l_name', 100)->nullable();
            $table->date('dob')->nullable();
            $table->string('email')->nullable();
            $table->string('f_contact')->nullable();
            $table->string('m_contact')->nullable();
            $table->string('address')->nullable();
            //employment/education
            $table->boolean('is_employed')->nullable();
            $table->string('person_place')->nullable();
            $table->string('person_location')->nullable();
            $table->string('person_contact')->nullable();
            $table->string('person_address')->nullable();
            $table->boolean('is_doc_passport')->nullable();
            $table->boolean('is_doc_license')->nullable();
            $table->boolean('is_doc_visa')->nullable();
            $table->string('doc_id')->nullable();
            $table->string('doc_issue_by')->nullable();
            $table->string('document')->nullable();
            $table->integer('booking_id');


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
        Schema::dropIfExists('occupants');
    }
}
