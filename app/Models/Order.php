<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_no',
        'name',
        'email',
        'phone',
        'billing_address',
        'shipping_address',
        'payable',
        'discount',
        'net_payable',
        'status',
    ];

    // Define the relationship between Order and User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship between Order and Product (through OrderProduct pivot table)
    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product')->withPivot('quantity', 'price', 'discount', 'net_price');
    }

    // Define the relationship between Order and Transaction
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
