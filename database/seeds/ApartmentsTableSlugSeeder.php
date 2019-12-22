<?php

use App\Entities\Apartment;
use Illuminate\Database\Seeder;

class ApartmentsTableSlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Apartment::all()->each(function($apartment){
            $slug = strtolower($apartment->name).' - '.strtolower($apartment->address);
            $apartment->slug = $slug;
            $apartment->save();
        });
    }
}
