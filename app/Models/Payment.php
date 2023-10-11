<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'cart_id',
        'external_id',
        'method',
        'installments',
        'approved_at',
        'ticket_url',
        'qrcode',
        'qrcode64',
    ];
}
