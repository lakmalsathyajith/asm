<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostalCodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $sql = file_get_contents(__DIR__ . '/dumps/dump-20191121.sql');

        // split the statements, so DB::statement can execute them.
        $statements = array_filter(array_map('trim', explode(';', $sql)));

        foreach ($statements as $stmt) {
            DB::statement($stmt);
        }
    }
}
