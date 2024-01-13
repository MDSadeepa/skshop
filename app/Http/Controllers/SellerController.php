<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Seller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use App\Models\Subcategory;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    //Seller Home page
    public function showSeller()
    {
        return view('seller.index');
    }

    public function myProducts(Seller $seller)
    {
        $products = Product::where('seller_id', $seller->id)->get();

        return view('seller.myProducts', [
            'products' => $products

            /*withn this function i want to list down products belonging to
             seller(not all products)

             *all factories has been created if you want you
             can migrate them and see
            */

        ]);
    }

    //Seller single product show
    public function mySingleProduct()
    {
        //
    }

    public function login()
    {
        //
    }

    public function register()
    {
        //
    }
}
