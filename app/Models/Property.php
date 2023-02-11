<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable=[
        'broker','address','listing_type','zip_code','description','build_year'
    ];

    public function charateristic()
    {
        return $this->hasOne(PropertyCharacteristic::class,"property","id");
    }


}