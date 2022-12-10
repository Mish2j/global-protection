<?php

use Illuminate\Support\Facades\Route;
use App\Models\ProductPage;
use App\Models\HomePage;
use App\Models\Components;
use App\Models\Pages;

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

Route::get('/', function() {
    return view('home')->with('data', Pages::getHomePageData());
});

Route::get('/product', function () {
    return view('home')->with('data', Pages::getProductPageData());
});

Route::get('/catalog', function () {
    return view('home')->with('data', Pages::getCatalogPageData());
});

// Route::get('/', function () {
//     return view('404');
// });



// Route::get('/home', 'PagesController@home')->name('home');
// Route::get('/product', 'PagesController@product')->name('product');
// Route::get('/catalog', 'PagesController@catalog')->name('catalog');