<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PosPurchaseDetail extends Model
{
    protected $fillable = [
        'pos_purchase_id', 'barcode', 'price_selling', 'qty', 'subtotal_price'
    ];
}
