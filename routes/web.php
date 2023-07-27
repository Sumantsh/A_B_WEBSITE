<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('', function () {
    return view('home');
});



Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('service', function () {
    return view('service');
});

Route::get('delivery', function () {
    return view('delivery');
});

Route::get('shipping', function () {
    return view('shipping');
});

Route::get('productspage', function () {
    return view('productspage');
});

Route::get('/sample', function () {
    return view('sample');
});

Route::get('/policies', function () {
    return view('policies');
});

Route::get('/fq', function () {
    return view('fq');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
