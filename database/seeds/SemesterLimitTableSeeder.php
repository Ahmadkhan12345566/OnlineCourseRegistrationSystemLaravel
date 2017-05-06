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

        DB::table('semster_scourseslimits')->delete();
        //insert some dummy records
        DB::table('semster_scourseslimits')->insert(array(
            array('semster_c_L'=>'4','semseter_num'=>'1'),
            array('semster_c_L'=>'6','semseter_num'=>'2'),

        ));
    }
}
