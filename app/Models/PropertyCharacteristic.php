<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyCharacteristic extends Model
{
    use HasFactory;

    protected $fillable=
    [
      'property','price','badrooms','bathrooms','sqft','price_sqft','property_type', 'status'
    ];
}