<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // Refresh the database before seeding
        Artisan::call('migrate:refresh');
    
        // seeding the database
        $this->call(DepartmentTableSeeder::class);
        $this->call(ProgramTableSeeder::class);
        $this->call(SessionTableSeeder::class);
        $this->call(RemarksTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(InstructorTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(OfferCoursesTableSeeder::class);
        $this->call(RegCoursesTableSeeder::class);
        $this->call(SemesterLimitTableSeeder::class);






    }

}
