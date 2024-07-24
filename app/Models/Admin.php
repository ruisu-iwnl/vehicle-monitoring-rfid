<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Admin extends Authenticatable implements AuthenticatableContract
{
    use SoftDeletes;

    protected $fillable = [
        'employeenumber',
        'firstname',
        'lastname',
        'emailaddress',
        'contactnumber',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
