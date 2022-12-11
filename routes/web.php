<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pages;

Route::get('/', function() {
    return view('home')->with('data', Pages::getHomePageData());
});

Route::get('/product', function () {
    return view('product')->with('data', Pages::getProductPageData());
});

Route::get('/catalog', function () {
    return view('catalog')->with('data', Pages::getCatalogPageData());
});
