<?php

Route::get('/', 'PagesController@root')->name('root');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
});
