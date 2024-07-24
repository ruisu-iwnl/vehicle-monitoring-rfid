<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TimeInOut extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'time_in',
        'time_out',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
