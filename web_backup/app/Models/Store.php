<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['name', 'city', 'address', 'phone', 'hours', 'maps_url', 'is_main'];
}
