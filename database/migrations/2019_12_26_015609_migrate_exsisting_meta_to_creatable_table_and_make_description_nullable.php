<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use \App\Entities\Apartment;
use \App\Entities\Meta;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class MigrateExsistingMetaToCreatableTableAndMakeDescriptionNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('metable', function (Blueprint $table) {
            $table->text('name')->nullable()->change();
            $table->text('description')->nullable()->change();
        });
        $allApartments = Apartment::all();
        foreach ($allApartments as $apartment) {

            if(!empty($apartment->meta)){
                $metable = new Meta();
                $metable->locale = "en";
                $metable->metable_type = "App\Entities\Apartment";
                $metable->metable_id = $apartment->id;
                $metable->name = $apartment->meta;
                $metable->description = $apartment->meta_description;
                $metable->save();
            }
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
