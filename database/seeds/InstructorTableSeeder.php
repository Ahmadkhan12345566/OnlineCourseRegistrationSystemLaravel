<?php

use Illuminate\Database\Seeder;

class InstructorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete instructors table records
        DB::table('instructors')->delete();
        //insert some dummy records
        DB::table('instructors')->insert(array(
            array('name'=>'Sidra Sultana','instructor_id'=>'111','department_id' => 1,'user_id'=>'2'),
            array('name'=>'Asad Hanif','instructor_id'=>'222','department_id' => 1,'user_id'=>'6'),


        ));
    }
}
