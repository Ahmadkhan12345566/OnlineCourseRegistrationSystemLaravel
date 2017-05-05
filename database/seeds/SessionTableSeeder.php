<?php

use Illuminate\Database\Seeder;

class SessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete semestersession table records
        DB::table('semestersessions')->delete();
        //insert some dummy records
        DB::table('semestersessions')->insert(array(
            array('title'=>'SPRING 16'),
            array('title'=>'FALL 16'),
            array('title'=>'SUMMER 16'),
            array('title'=>'SPRING 17'),
            array('title'=>'FALL 17')
        ));
    }
}
