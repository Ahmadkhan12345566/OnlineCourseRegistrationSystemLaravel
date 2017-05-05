<?php

use Illuminate\Database\Seeder;

class RegCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('regcourses')->delete();
        //insert some dummy records
        DB::table('regcourses')->insert(array(
            array('offer_course_id'=>'1','status_id'=>'1','remark_id'=>'1','student_id'=>'1'),
            array('offer_course_id'=>'2','status_id'=>'1','remark_id'=>'1','student_id'=>'1'),

            array('offer_course_id'=>'3','status_id'=>'1','remark_id'=>'1','student_id'=>'1'),
            array('offer_course_id'=>'4','status_id'=>'1','remark_id'=>'1','student_id'=>'1'),



        ));
    }
}
