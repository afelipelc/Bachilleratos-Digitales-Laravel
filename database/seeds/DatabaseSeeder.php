<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(SchoolsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SemestersTableSeeder::class);
        $this->call(TutorsTableSeeder::class);  
        $this->call(StudentsTableSeeder::class);
        $this->call(SchoolyearsTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(RegistrarionsTableSeeder::class);
        $this->call(DocumentsTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(GroupStudentsTableSeeder::class);
        Model::reguard();
    }
}
