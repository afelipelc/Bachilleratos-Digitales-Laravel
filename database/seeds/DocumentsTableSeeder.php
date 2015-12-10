<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
      for($i=1; $i <=10; $i++){
        DB::table('documents')->insert(array(
          'id' => $i,
          'student_id' => $i,
          'tipo' => $faker->randomElement($array = array ('acta','migratorio','naturalizacion','sgnaletica')),
          'created_at' => new DateTime,
          'updated_at' => new DateTime
          ));
      }
    }
}
