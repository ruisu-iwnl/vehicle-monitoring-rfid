<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'license_plate',
        'make',
        'model',
        'year',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
