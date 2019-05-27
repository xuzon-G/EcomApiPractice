<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name'=>$this->name,
            'description'=>$this->detail,
            'price'=>$this->price,
            'stock'=>$this->stock>0?$this->stock:'out of Stock',
            'discount'=>$this->discount,
            'TotalPrice'=>$this->price-($this->price*($this->discount/100)),
            'rating'=>$this->review()->count()>0?round($this->review()->sum('star')/$this->review()->count(),2):'No rating yet',
            'href'=>[
                'link'=>route('reviews.index', $this->id)
            ],
        ];
    }
}
