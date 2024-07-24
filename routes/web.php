<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});



Route::resource('products', 'ProductsController');
Route::resource('pharmacy', 'PharmaciesController');