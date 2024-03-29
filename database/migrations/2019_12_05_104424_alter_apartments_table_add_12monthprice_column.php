<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterApartmentsTableAdd12monthpriceColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apartments', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->after('beds')->default('0.00')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('apartments', function (Blueprint $table) {
            $table->dropColumn('price');
        });
    }
}
