<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offercourse extends Model
{
    //
    public function Ccourse()
    {
        return $this->belongsTo('App\Course');
    }
}
