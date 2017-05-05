<?php
/**
 * Created by PhpStorm.
 * User: Ahmad khan
 * Date: 5/5/2017
 * Time: 11:34 AM
 */

namespace App;


class CommonCode
{
    public static function CourseTitleById($id){
        return Course::all()->where('id', '=', $id)->first()->title;
    }

}