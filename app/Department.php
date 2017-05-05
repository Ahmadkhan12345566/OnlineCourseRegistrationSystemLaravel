<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = array(
        'title'
    );

    public function program()
    {
        return $this->hasMany('App\Program');
    }
}
