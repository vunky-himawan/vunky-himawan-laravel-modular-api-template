<?php

namespace App\Modules\Facility\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'building_id',
        'name',
        'max_capacity',
        'floor',
        'description',
        'type',
        'is_active',
    ];
}
