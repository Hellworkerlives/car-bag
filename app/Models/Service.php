<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $guarded = [];
    protected $casts = [
        'is_active' => 'boolean',
    ];
}
