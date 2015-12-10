<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SemestersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semesters')->delete();
 
        $semesters = array(
            ['id' => 1, 'nombre' => 'Primero','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'nombre' => 'Segundo','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'nombre' => 'Tercero','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'nombre' => 'Cuarto','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'nombre' => 'Quinto','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'nombre' => 'Sexto','created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        // Uncomment the below to run the seeder
        DB::table('semesters')->insert($semesters);
    }
}
