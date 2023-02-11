<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PropertiesCharateristicsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'price'=>$this->price,
            'badrooms'=>$this->badrooms,
            'bathrooms'=>$this->bathrooms,
            'sqft'=>$this->sqft,
            'price_sqft'=>$this->price_sqft,
            'property_type'=>$this->property_type,
            'status'=>$this->status,
        ];
    }
}
