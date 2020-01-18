<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSulgAndNameLenght extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contents', function (Blueprint $table) {
            $table->string('name', 255)->change();
            $table->string('slug', 255)->change();
        });

        Schema::table('blogs', function (Blueprint $table) {
            $table->string('name', 255)->change();
            $table->string('slug', 255)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contents', function (Blueprint $table) {
            $table->string('name', 100)->change();
            $table->string('slug', 100)->change();
        });

        Schema::table('blogs', function (Blueprint $table) {
            $table->string('name', 100)->change();
            $table->string('slug', 100)->change();
        });
    }
}
