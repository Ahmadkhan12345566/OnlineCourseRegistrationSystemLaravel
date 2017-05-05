<?php

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete department table records
        DB::table('departments')->delete();
        //insert some dummy records
        DB::table('departments')->insert(array(
            array('title'=>'Computing'),
            array('title'=>'Engineering'),
            array('title'=>'Management Sceince'),
            array('title'=>'Pharmacy'),
            array('title'=>'Life Scienecs')
        ));
    }
}
