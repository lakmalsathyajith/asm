<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metable', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale', 4);
            $table->string('name', 255);
            $table->text('description');
            $table->integer('metable_id');
            $table->string('metable_type', 255);
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
        Schema::dropIfExists('metable');
    }
}
