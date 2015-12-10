<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RegistrarionsTableSeeder extends Seeder
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
        DB::table('inscriptions')->insert(array(
          'id' => $i,
          'student_id' => $faker->numberBetween($min = 1, $max = 10),
          'school_id' => $faker->numberBetween($min = 1, $max = 3),
          'semester_id' => $faker->numberBetween($min = 1, $max = 3),
          'group_id' => $faker->numberBetween($min = 1, $max = 3),
          'schoolyear_id' => 1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
          ));
      }
    }
}
