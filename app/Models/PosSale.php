<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PosSale extends Model
{
    protected $fillable = [
        'user_id', 'member_code', 'total_item',
        'total_price', 'discount', 'total_payment', 'cash'
    ];
}
