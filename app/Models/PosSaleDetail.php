<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PosSaleDetail extends Model
{
    protected $fillable = [
        'pos_sale_id', 'barcode', 'price_selling', 'qty', 'discount', 'price_subtotal'
    ];
}
