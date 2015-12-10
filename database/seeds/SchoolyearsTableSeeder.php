<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SchoolyearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schoolyears')->delete();
 
        $schoolyears = array(
            ['id' => 1, 'titulo' => '2015 - 2016','created_at' => new DateTime, 'updated_at' => new DateTime]
        );
 
        // Uncomment the below to run the seeder
        DB::table('schoolyears')->insert($schoolyears);
    }
}
