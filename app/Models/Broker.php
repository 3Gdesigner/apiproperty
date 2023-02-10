<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Broker extends Model
{
    use HasFactory;
    
    protected $fillable=[
      'name','address','zip_code','city','logo_path','phone_number'  
    ];
}