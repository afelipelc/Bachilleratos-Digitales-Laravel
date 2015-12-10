<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert(array(
          'id' => 1,
          'name' => 'Felipe',
          'username' => 'afelipe',
          'email' => 'afelipelc@gmail.com',
          'password' => Hash::make('secret'),
          'role' => 'admin',
          'school_id' => 1,
          'active' => true,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
          ));

      
        $faker = Faker::create();
      for($i=2; $i <= 11; $i++){
        DB::table('users')->insert(array(
          'id' => $i,
          'name' => $faker->name,
          'username' => $faker->unique()->userName,
          'email' => $faker->unique()->email,
          'password' => Hash::make('secret'),
          'role' => $faker->randomElement($array = array ('director','profesor')),
          'school_id' => $faker->numberBetween($min = 1, $max = 3),
          'active' => true,
          'created_at' => new DateTime,
          'updated_at' => new DateTime
          ));
      }
    }
}
