<?php

use Illuminate\Support\Facades\Route;
use AApp\Http\Controllers;

Route::get('/', function () {
    return view('inicio');
});
Route::get('login', function () {
    return view('login');
});
Route::get('register', function () {
    return view('registro');
});
