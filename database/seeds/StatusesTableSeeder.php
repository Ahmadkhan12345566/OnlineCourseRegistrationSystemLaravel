<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('statuses')->delete();
        //insert some dummy records
        DB::table('statuses')->insert(array(
            array('title'=>'pass'),
            array('title'=>'fail'),
            array('title'=>'widraw')
        ));
    }
}
