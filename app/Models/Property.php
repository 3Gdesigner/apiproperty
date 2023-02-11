<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = "properties";

    use HasFactory;

    protected $fillable=[
        'broker','address','city','listing_type','zip_code','description','build_year'
    ];

    public function charaterisc()
    {
        return $this->hasOne(PropertyCharacteristic::class,"property","id");
    }


}
