<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Show Product Listing
    public function index()
    {
        return view('home.index', [
            'products' => Product::latest()->filter(request(['search']))->get()
        ]);
    }

    //Show Sigle Product
    public function singleShow(Product $product)
    {
        return view('home.singleView', [
            'product' => $product
        ]);
    }

}
