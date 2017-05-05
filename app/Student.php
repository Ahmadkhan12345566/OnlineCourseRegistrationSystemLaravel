<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    public function program()
    {
        return $this->belongsTo('App\Program');
    }
}
