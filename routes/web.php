<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/home-internet', function () {
    return view('home-internet');
});

Route::get('/wholesale-internet', function () {
    return view('wholesale');
});

Route::get('/business-communication', function () {
    return view('communication');
});
