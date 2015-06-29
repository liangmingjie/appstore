<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    //
    protected $fillable = [
        'email',
        'type',
        'nickname',
        'realname',
        'phone',
        'identity_card_number',
        'identity_card_image',
        'user_id',
        'qq',
        'audit',

    ];
}
