<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = [
        'userid',
        'name',
        'code',
        'description',
        'compostion',
        'manufacturer',
        'availability',
        'status',
    ];

    protected $hidden = [

    ];
}
