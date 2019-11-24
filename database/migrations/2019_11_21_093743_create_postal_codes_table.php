<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostalCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postal_codes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ssc_code')->nullable();
            $table->string('suburb', 100)->nullable();
            $table->string('urban_area', 100)->nullable();
            $table->integer('postcode')->nullable();
            $table->string('state')->nullable();
            $table->string('state_name', 30)->nullable();
            $table->string('type', 100)->nullable();
            $table->string('local_goverment_area', 100)->nullable();
            $table->string('statistic_area', 100)->nullable();
            $table->integer('elevation')->nullable();
            $table->integer('population')->nullable();
            $table->integer('median_income')->nullable();
            $table->decimal('sqkm', 10, 3)->nullable();
            $table->decimal('lat', 10, 5)->nullable();
            $table->decimal('lng', 10, 5)->nullable();
            $table->string('timezone', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postal_codes');
    }
}
