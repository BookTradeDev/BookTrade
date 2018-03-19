<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Listing extends Model
{
    public function scopeSearch($query, $s){
        return $query->where('isbn', 'like', '%' . $s. '%')
            ->orWhere('title', 'like', '%' .$s. '%');
    }
}
