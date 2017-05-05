<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{


    public function instructor()
    {
        return $this->belongsTo('App\Instructor');
    }
    public function program()
    {
        return $this->belongsTo('App\Program');
    }
}
