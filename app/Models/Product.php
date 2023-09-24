<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'slug',
        'image',
        'title',
        'short_description',
        'description',
        'base_price',
        'discount',
        'stock',
        'is_active',
    ];

    // Define the relationship between Product and Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Define the relationship between Product and Cart
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
