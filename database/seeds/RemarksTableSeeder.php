<?php

use Illuminate\Database\Seeder;

class RemarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete Programs table records
        DB::table('remarks')->delete();
        //insert some dummy records
        DB::table('remarks')->insert(array(
            array('title'=>'R-1'),
            array('title'=>'R-2')
        ));
    }
}
