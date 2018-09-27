<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name', 'category_id', 'unit_id', 'sales_price',
    ];
}
