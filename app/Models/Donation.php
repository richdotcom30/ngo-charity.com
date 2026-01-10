<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'amount',
        'frequency',
        'payment_method',
        'status',
        'transaction_id',
        'payment_details',
        'processed_at'
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'payment_details' => 'array',
        'processed_at' => 'datetime'
    ];

    protected $dates = ['processed_at'];
}
