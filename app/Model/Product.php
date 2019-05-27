<?php

namespace App\Model;
use App\Model\Review;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    function review()
    {
        return $this->hasMany(Review::class);
    }
}
