<?php

use App\Http\Controllers\SaleController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', 'TestController@index');

Route::get('/', function () {
    return redirect(route("sale.create"));
});

Route::get('new', function () {
    return view('new');
});

Route::get('sales', function () {
    return view('sales');
});

Route::get('customer', function () {
    return redirect(route("user.index"));
});

Route::get('reorder', function () {
    return view('reorder');
});

Route::resource("order", 'OrderController');
Route::resource("ingredient", 'IngredientController');
Route::resource("product", 'ProductController');
Route::resource("ingredient_product", 'IngredientProductController');
Route::resource("sale", 'SaleController');
Route::resource("product_sale", 'ProductSaleController');
Route::resource("user", 'UserController');
Route::resource("inventory", 'IngredientController');
