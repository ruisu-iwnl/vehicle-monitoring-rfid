<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityLog extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'activity_type',
        'activity_description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
