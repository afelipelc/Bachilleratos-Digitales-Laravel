<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GroupStudentsTableSeeder extends Seeder
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
        DB::table('group_student')->insert(array(
          'id' => $i,
          'group_id' => $faker->numberBetween($min = 1, $max = 3),
          'student_id' => $faker->numberBetween($min = 1, $max = 10)
          ));
      }
    }
}
