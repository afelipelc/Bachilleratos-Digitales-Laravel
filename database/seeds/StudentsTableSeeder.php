<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder
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
        DB::table('students')->insert(array(
          'id' => $i,
          'nia' => $faker->randomNumber($nbDigits = 6),
          'nombre' => $faker->name,
          'apellidop' => $faker->lastName,
          'apellidom' => $faker->lastName,
          'curp' => $faker->bothify('????######??????##'),
          'sexo' => $faker->randomElement($array = array ('h','m')),
          'nacimiento' => $faker->dateTime($max = 'now'),
          'entidadnacimiento' => $faker->state(),
          'tiposangre' => $faker->bothify('?#?'),
          'domicilio' => $faker->streetAddress(),
          'cp' => $faker->bothify('#####'),
          'colonia' => $faker->city(),
          'localidad' => $faker->city(),
          'municipio' => $faker->city(),
          'estado' => $faker->state(),
          'tel' => $faker->phoneNumber(),
          'cel' => $faker->phoneNumber(),
          'email' => $faker->email(),
          'tutor_id' => $faker->numberBetween($min = 1, $max = 10),
          'created_at' => new DateTime,
          'updated_at' => new DateTime
          ));
      }
    }
}
