<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->delete();
        //insert some dummy records
        DB::table('students')->insert(array(
            array('name'=>'Ahamd khan','student_reg_no'=>'111','program_id' => 1,'user_id'=>'3'),
            array('name'=>'Raja g','student_reg_no'=>'131','program_id' => 1,'user_id'=>'4'),
            array('name'=>'Umer','student_reg_no'=>'121','program_id' => 1,'user_id'=>'5'),


        ));
    }
}
