<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'image',
        'title',
        'short_description',
        'description',
        'is_active',
    ];

    // Define the relationship between Category and Product
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
