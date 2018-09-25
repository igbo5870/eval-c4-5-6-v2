<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article_supplier extends Model
{
    protected $fillable = [
        'article_id', 'supplier_id', 'purchase_price',
    ];
}
