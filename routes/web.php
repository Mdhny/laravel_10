<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'HomeController@home');

Route::get('/consumer', 'ConsumerController@index');
Route::get('/consumer/create', 'ConsumerController@create');
Route::post('/consumer/store', 'ConsumerController@store');
Route::get('/consumer/edit/{id}', 'ConsumerController@edit');
Route::put('/consumer/update', 'ConsumerController@update');
Route::get('/consumer/destroy/{id}', 'ConsumerController@destroy');


Route::get('/packet', 'PacketController@index');
Route::get('/packet/create', 'PacketController@create');
Route::post('/packet/store', 'PacketController@store');
Route::get('/packet/edit/{id}', 'PacketController@edit');
Route::put('/packet/update', 'PacketController@update');
Route::get('/packet/destroy/{id}', 'PacketController@destroy');

Route::get('/costumer', 'CostumerController@index');
Route::get('/costumer/create', 'CostumerController@create');
Route::post('/costumer/store', 'CostumerController@store');
Route::get('/costumer/edit/{id}', 'CostumerController@edit');
Route::put('/costumer/update', 'CostumerController@update');
Route::get('/costumer/destroy/{id}', 'CostumerController@destroy');

Route::get('/price', 'PriceController@index');
Route::get('/price/create', 'PriceController@create');
Route::post('/price/store', 'PriceController@store');
// Route::get('/price/edit/{id}', 'PriceController@edit');
Route::put('/price/update', 'PriceController@update');
Route::get('/price/destroy/{id}', 'PriceController@destroy');
