<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function products(){
        $categories = Category::all();
        $subcategories = Subcategory::all();

        return view('admin.products', [
            'categories' => $categories,
            'subcategories' => $subcategories
        ]);
    }

}
