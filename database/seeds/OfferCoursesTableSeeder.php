<?php

use Illuminate\Database\Seeder;

class OfferCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('offercourses')->delete();
        //insert some dummy records
        DB::table('offercourses')->insert(array(
            array('semestersessions_id'=>'1','course_id'=>'1','instructor_id'=>'1','program_id'=>'1'),
            array('semestersessions_id'=>'1','course_id'=>'2','instructor_id'=>'2','program_id'=>'1'),
            array('semestersessions_id'=>'1','course_id'=>'3','instructor_id'=>'2','program_id'=>'1'),
            array('semestersessions_id'=>'1','course_id'=>'4','instructor_id'=>'1','program_id'=>'1'),
            array('semestersessions_id'=>'1','course_id'=>'5','instructor_id'=>'2','program_id'=>'1'),
            array('semestersessions_id'=>'1','course_id'=>'6','instructor_id'=>'1','program_id'=>'1'),
            array('semestersessions_id'=>'5','course_id'=>'1','instructor_id'=>'1','program_id'=>'1'),
            array('semestersessions_id'=>'5','course_id'=>'2','instructor_id'=>'2','program_id'=>'1'),
            array('semestersessions_id'=>'5','course_id'=>'3','instructor_id'=>'1','program_id'=>'1'),
            array('semestersessions_id'=>'5','course_id'=>'4','instructor_id'=>'1','program_id'=>'1'),
            array('semestersessions_id'=>'5','course_id'=>'5','instructor_id'=>'1','program_id'=>'1'),
            array('semestersessions_id'=>'5','course_id'=>'6','instructor_id'=>'2','program_id'=>'1'),
            array('semestersessions_id'=>'5','course_id'=>'7','instructor_id'=>'2','program_id'=>'1')

        ));

    }
}
