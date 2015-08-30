<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //
    protected $fillable = [
        'name',
        'bundle_id',
        'guid',
        'icon',
        'brief',
        'price',
        'user_id',
    ];
}
