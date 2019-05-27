<?php

namespace App\Http\Resources\Reviews;

use Illuminate\Http\Resources\Json\Resource;

class ReviewCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name'=>$this->customer,
            'review'=>$this->review,
            'rating'=>$this->star
        ];
    }
}
