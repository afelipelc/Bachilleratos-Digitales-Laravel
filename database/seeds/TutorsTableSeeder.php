<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TutorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      for($i=1; $i <= 10; $i++){
        DB::table('tutors')->insert(array(
          'id' => $i,
          'nombre' => $faker->name,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
          ));
      }
    }
}
