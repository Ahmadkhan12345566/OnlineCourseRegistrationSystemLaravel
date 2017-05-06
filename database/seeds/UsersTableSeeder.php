<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //
        DB::table('users')->delete();
        //insert some dummy records
        DB::table('users')->insert(array(
            array('user_id'=>'1014','password'=>'786','user_role'=>'1'),
            array('user_id'=>'0448','password'=>'0448','user_role'=>'2'),

            array('user_id'=>'1111','password'=>'1111','user_role'=>'3'),
            array('user_id'=>'2222','password'=>'1111','user_role'=>'3'),
            array('user_id'=>'3333','password'=>'1111','user_role'=>'3'),
             array('user_id'=>'448','password'=>'448','user_role'=>'2'),
        ));

    }
}
