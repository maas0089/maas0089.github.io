<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    public $timestamps = false;

    public function courses()
    {
        return $this->hasMany('App\Course');
    }
}
