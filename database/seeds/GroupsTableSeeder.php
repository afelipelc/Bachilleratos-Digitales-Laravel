<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
      for($i=1; $i <= 3; $i++){
        $grado = $faker->numberBetween($min = 1, $max = 3);
        DB::table('groups')->insert(array(
          'id' => $i,
          'nombre' => $grado.$faker->bothify('?'),
          'user_id' => $faker->numberBetween($min = 2, $max = 11),
          'school_id' => $faker->numberBetween($min = 1, $max = 3),
          'schoolyear_id' => 1,
          'semester_id' => $grado,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
          ));
      }
    }
}
