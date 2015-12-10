<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
      for($i=1; $i <= 12; $i++){
        DB::table('subjects')->insert(array(
          'id' => $i,
          'nombre' => $faker->name,
          'semester_id' => $faker->numberBetween($min = 1, $max = 6),
          'created_at' => new DateTime,
          'updated_at' => new DateTime
          ));
      }
    }
}
