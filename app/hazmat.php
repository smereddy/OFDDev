<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hazmat extends Model
{
    protected $fillable = [

        'createdby',
        'updatedby',
        'ofd6cID',
        'contactCorVel',
        'corVelID',
        'attachOFD6d',
        'pathOFD6d'


    ];
}
