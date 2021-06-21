<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale_Bike extends Model
{
    protected $fillable=['bike_no','price','name','number','address','date'];
}
