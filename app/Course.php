<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $timestamps = false;

    public function term()
    {
        return $this->hasOne('App\Term', 'id',"term_id");
    }
}
