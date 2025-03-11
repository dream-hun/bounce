<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $casts = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'email',
        'phone_number',
        'facebook',
        'twitter',
        'instagram',
        'tiktok',
    ];
}
