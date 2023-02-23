<?php

namespace Amooati\ECommerce\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price'
    ];
}
