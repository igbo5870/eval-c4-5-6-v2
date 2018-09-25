<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movements extends Model
{
    protected $fillable = [
        'name', 'article_id', 'quantity', 'date_time', 'movement_type_id', 'purchase_id', 'sale_id',
    ];
}
