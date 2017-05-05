<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        //delete Programs table records
        DB::table('roles')->delete();
        //insert some dummy records
        DB::table('roles')->insert(array(
            array('title'=>'admin'),
            array('title'=>'hod'),
            array('title'=>'student')
        ));
    }
}
