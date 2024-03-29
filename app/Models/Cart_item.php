<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart_item extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'offer_id',
        'cart_id',
        'quantity',
    ];
}
