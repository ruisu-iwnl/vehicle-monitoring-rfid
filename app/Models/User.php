<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
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

    // Define relationships if needed
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }

    public function timeInOuts()
    {
        return $this->hasMany(TimeInOut::class);
    }

    public function activityLogs()
    {
        return $this->hasMany(ActivityLog::class);
    }
}
