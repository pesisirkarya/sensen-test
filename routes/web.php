<?php

use Illuminate\Support\Facades\Route;
use app\http\DosenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'DosenController@checkData');