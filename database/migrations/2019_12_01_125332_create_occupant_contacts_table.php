<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOccupantContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occupant_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('occupant_id');
            $table->string('email', 255);
            $table->string('address', 255);
            $table->string('land_phone', 15);
            $table->string('mobile_phone', 15);
            $table->string('emp_status', 20);
            $table->string('emp_phone', 15)->nullable();
            $table->string('emp_address', 255)->nullable();
            $table->string('emp_personal_address', 255);
            $table->string('emp_department', 100)->nullable();
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
        Schema::dropIfExists('occupant_contacts');
    }
}
