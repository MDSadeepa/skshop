<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// user home page
Route::get('/', [HomeController::class, 'index']);

// show single product
Route::get('/products/{product}', [HomeController::class, 'singleShow']);



// Route group for seller
Route::prefix('seller')->group(function () {
    //show seller home page
    Route::get('/home', [SellerController::class, 'showSeller']);
    //show seller login page
    Route::get('/login', [SellerController::class, 'login']);
    //show seller register page
    Route::get('/register', [SellerController::class, 'register']);
    //show seller manage product page
    Route::get('/manageProducts', [SellerController::class, 'myProducts']);
    //show seller manage product page
    Route::get('/manageProducts/{products}', [SellerController::class, 'mySingleProduct']);
    //Store products
    Route::get('/manageProducts/addProducts', [SellerController::class, 'storeProducts']);
});
