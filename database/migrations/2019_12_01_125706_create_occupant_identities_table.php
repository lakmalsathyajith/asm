<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOccupantIdentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occupant_identities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('occupant_id');
            $table->string('identity_type', 20);
            $table->string('identity_number', 50);
            $table->string('identity_issued_by', 100);
            $table->string('next_of_kin', 255);
            $table->string('kin_relationship', 50);
            $table->string('kin_email', 255)->nullable();
            $table->string('kin_address', 255);
            $table->string('kin_land_phone', 15);
            $table->string('kin_mobile_phone', 15);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('occupant_identities');
    }
}
