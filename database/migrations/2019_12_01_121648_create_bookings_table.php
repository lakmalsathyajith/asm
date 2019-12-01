<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid', 20);
            $table->integer('user_id')->nullable();
            $table->string('rms_reference', 20)->nullable();
            $table->integer('apartment_id');
            $table->tinyInteger('adults');
            $table->tinyInteger('children');
            $table->dateTime('check_in');
            $table->dateTime('check_out');
            $table->decimal('rent',10, 2);
            $table->string('status', 10)->default('INCOMPLETE');
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
        Schema::dropIfExists('bookings');
    }
}
