<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@home')
    -> name('home');

Route::get('/edit/employee/{id}', 'MainController@edit')
    -> name('edit');
Route::post('/update/employee/{id}', 'MainController@update')
    -> name('update');

Route::get('destroy/{id}', 'MainController@destroy')
    -> name('destroy');
