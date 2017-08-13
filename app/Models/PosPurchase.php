<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PosPurchase extends Model
{
    protected $fillable = [
        'suplier_id', 'total_item', 'total_price', 'discount', 'pay'
    ];
}
