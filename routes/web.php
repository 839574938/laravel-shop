<?php


Route::get('/', function () {
    return view('welcome');
});



$router->get('products', 'ProductsController@index');

