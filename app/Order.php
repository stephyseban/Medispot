<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'shopeid',
        'medicineid',
        'name',
        'address',
        'phone',
        'quantity',
        'status',
    ];

    protected $hidden = [

    ];
}
