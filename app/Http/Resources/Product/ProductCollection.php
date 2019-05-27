<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
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
            'name'=>$this->name,
            'price'=>$this->price,
            'TotalPrice'=>$this->price-($this->price*($this->discount/100)),
            'rating'=>$this->review()->count()>0?round($this->review()->sum('star')/$this->review()->count(),2):'No rating yet',
            'href'=>[
                'link'=>route('products.show', $this->id)
            ],
        ];
    }
}
