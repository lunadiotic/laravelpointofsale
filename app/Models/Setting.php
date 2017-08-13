<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'company_name', 'address', 'phone', 'logo', 'member_card', 'member_discount','note_type'
    ];
}
