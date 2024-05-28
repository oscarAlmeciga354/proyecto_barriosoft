<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', function () {
    return view('inicio');
});
Route::get('login', function () {
    return view('login');
});
Route::get('register', function () {
    return view('registro');
});
