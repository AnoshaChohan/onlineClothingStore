<?php

// File: app/Models/ViewedProduct.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewedProduct extends Model
{
    use HasFactory;

    protected $table = 'viewed_products'; // Define the table name if it's different from the default convention

    protected $fillable = ['user_id', 'product_id']; // Define fillable fields
}

