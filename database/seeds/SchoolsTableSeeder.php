<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('schools')->delete();

        $faker = Faker::create();
      for($i=1; $i <= 3; $i++){
        DB::table('schools')->insert(array(
          'id' => $i,
          'nombre'=> $faker->sentence($nbWords = 3),
          'clave' => $faker->bothify('##??##?#???'),
          'direccion' => $faker->sentence($nbWords = 5),
          'localidad' => $faker->sentence($nbWords = 5),
          'municipio' => $faker->sentence($nbWords = 2),
          'entidad' => $faker->sentence($nbWords = 1),
          'cp' => $faker->bothify('####'),
          'user_id' => $faker->numberBetween($min = 1, $max = 11)
          ));
      }
    }
}
