<?php

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

Route::get('/', function () {
    return view('layouts/main');
});

Route::get('/payment_deliveries', function() {
    return view('layouts/payment_deliveries');
});

Route::get('/feedback', function() {
    return view('layouts/feedback');
});

Route::get('/categories/{name}', [
    'uses' => 'CategoriesController@categoryAction'
]);

Route::post('/search/{name}', [
    'uses' => 'SearchController@searchAction'
]);
