<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete courses table records
        DB::table('courses')->delete();
        //insert some dummy records
        DB::table('courses')->insert(array(
            array('code'=>'CS100', 'title' => 'Introduction to Computing', 'credit_hours' => '3', 'program_id' => '1','semester_id'=>'1','prereq_id'=> null),
            array('code'=>'CS106', 'title' => 'Introduction to Computer Programming', 'credit_hours' => '4', 'program_id' => '1','semester_id'=>'1','prereq_id'=>null),
            array('code'=>'MT100', 'title' => 'Basic Mathematics', 'credit_hours' => '3', 'program_id' => '1','semester_id'=>'1','prereq_id'=>null),
            array('code'=>'SS104', 'title' => 'English 1', 'credit_hours' => '3', 'program_id' => '1','semester_id'=>'1','prereq_id'=>null),
            array('code'=>'CS200', 'title' => 'Object Oriented Programing', 'credit_hours' => '4', 'program_id' => '1','semester_id'=>'2','prereq_id'=>'2'),
            array('code'=>'MT101', 'title' => 'Calculus 1', 'credit_hours' => '3', 'program_id' => '1','semester_id'=>'2','prereq_id'=>'3'),
            array('code'=>'SS111', 'title' => 'Accounting', 'credit_hours' => '3', 'program_id' => '1','semester_id'=>'2','prereq_id'=>null),
        ));
    }
}
