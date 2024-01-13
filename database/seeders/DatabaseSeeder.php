<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Seller;
use App\Models\User;
use App\Models\Admin;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        Admin::factory(1)->create();

        Seller::factory(3)->create();

        Brand::factory(5)->create();

        Color::factory(5)->create();

        $catagory = Category::create([
            'name'=>'Mobile phones and tabs'
        ]);

        $subcatagory = Subcategory::create([
            'category_id' => $catagory->id,
            'name'=>'Mobile Phones'
        ]);

        Product::factory(10)->create([
            'subcategory_id' => $subcatagory->id,
            'seller_id' => '1',
            'color_id' => '1',
            'brand_id' => '1'
        ]);

    }
}
