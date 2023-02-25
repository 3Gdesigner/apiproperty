<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyCharacteristic extends Model
{
    protected $table="property_characteristics";
    use HasFactory;

    protected $fillable=
    [
      'property','price','bedrooms','bathrooms','sqft','price_sqft','property_type', 'status'
    ];
}
