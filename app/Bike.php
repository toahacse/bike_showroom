<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    protected $fillable=['bike_image','brand','model','price','km_run','description','location','number','publication_status'];
}
