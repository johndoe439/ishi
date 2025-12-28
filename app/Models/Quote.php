<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    //

    protected $guarded = [];

    protected $casts = [
        'express_delivery' => 'boolean',
        'insurance'        => 'boolean',
        'packaging'        => 'boolean',
        'price'            => 'decimal:2',
        'weight'           => 'decimal:2',
        'height'           => 'decimal:2',
        'width'            => 'decimal:2',
        'length'           => 'decimal:2',
    ];
}
