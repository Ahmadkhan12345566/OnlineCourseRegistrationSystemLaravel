<?php

use Illuminate\Database\Seeder;

class ProgramTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete Programs table records
        DB::table('programs')->delete();
        //insert some dummy records
        DB::table('programs')->insert(array(
            array('title'=>'BSCS', 'department_id' => 1),
            array('title'=>'BSSE', 'department_id' => 1),
            array('title'=>'Electrical', 'department_id' => 2),
            array('title'=>'Business Administration BBA', 'department_id' => 3),
            array('title'=>'BS in Microbiology BSMB', 'department_id' => 5)
        ));
    }
}
