<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Authenticatable
{
    use SoftDeletes;

    protected $fillable = [
        'employeenumber',
        'firstname',
        'lastname',
        'emailaddress', // Match with the database column
        'contactnumber',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    public function getAuthIdentifierName()
    {
        return 'emailaddress';
    }
}
