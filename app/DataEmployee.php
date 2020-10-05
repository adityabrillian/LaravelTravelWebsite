<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataEmployee extends Model
{
    protected $fillable = [
        'employeeNumber', 'lastName', 'firstName'
    ];

    protected $hidden = [

    ];
}
