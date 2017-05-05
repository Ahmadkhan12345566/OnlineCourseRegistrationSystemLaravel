<?php

use Illuminate\Database\Seeder;

class SemesterLimitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('semstercourseslimit')->delete();
        //insert some dummy records
        DB::table('semstercourseslimit')->insert(array(
            array('semster_c_L'=>'7','semseter_num'=>'1'),
            array('semster_c_L'=>'6','semseter_num'=>'2'),

        ));
    }
}
