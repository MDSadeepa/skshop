<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productimage extends Model
{
    use HasFactory;

    //Realtionship with products
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
