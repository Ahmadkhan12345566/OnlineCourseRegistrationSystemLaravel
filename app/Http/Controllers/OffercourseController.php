<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OffercourseController extends Controller
{
    //
    public function Cou_rse()
    {
        return $this->belongsTo('App\Course');
    }
}
