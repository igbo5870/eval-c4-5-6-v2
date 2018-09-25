<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movement_type extends Model
{
    protected $fillable = [
        'name', 'direction_id',
    ];
}
