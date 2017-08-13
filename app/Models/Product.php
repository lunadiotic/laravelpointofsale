<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_category_id', 'barcode', 'brand', 'product', 'price_selling',
        'price_purchase', 'discount', 'stock'
    ];
}
