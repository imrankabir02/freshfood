<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'system_id',
        'order_id',
        'name',
        'email',
        'phone',
        'payable',
        'payment_method',
        'payment_medium',
        'status',
    ];

    // Define the relationship between Transaction and Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
