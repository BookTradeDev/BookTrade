<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public function book()
    {
        return $this->hasOne('App\Book');
    }

}
