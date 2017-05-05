<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegCourse extends Model
{
    //
    public function remark()
    {
        return $this->belongsTo('App\Remark');
    }
    public function status()
    {
       // $test=Statuse::all();

        //return response()->json($test);
       return $this->belongsTo('App\Statuse');

    }

    public function offer_course()
    {
        return $this->belongsTo('App\Offercourse');
    }

    public function Cou_rse()
    {
        return $this->belongsTo('App\Course');
    }

}
