<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = array(
        'title',
        'department_id'
    );

    public function department()
    {
        return $this->belongsTo('App\Department');
    }
}
