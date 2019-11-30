<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('primer_id');
            $table->string('relate_name')->nullable();
            $table->string('relationship')->nullable();
            $table->string('relate_f_contact')->nullable();
            $table->string('relate_m_contact')->nullable();
            $table->string('relate_email')->nullable();
            $table->string('relate_address')->nullable();
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
        Schema::dropIfExists('relations');
    }
}
