<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'price','size', 'image', 'category']; // Define fillable fields

    // Relationships
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
