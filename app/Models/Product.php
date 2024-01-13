<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Relationship to subcatagory
    public function subcatagory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }

    // Relationhip with Seller
    public function seller()
    {
        return $this->belongsTo(Seller::class, 'seller_id');
    }

    //Realtionship with color
    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }

    //Relatonship with product image
    public function productImage(){
        return $this->hasMany(Productimage::class, 'product_id');
    }

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('name', 'like', '%' . request('search') . '%')
                ->orWhere('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%');
        }
    }
}
