<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helo', function () {
    return 'Apa kabar dunia';
});

Route::get('/belajar', function () {
    echo '<h1>Apa kabar dunia</h1>';
    echo 'tetep asikkkk....';
});

Route::get('/biodata/{namadepan}/{namabelakang}', function ($namadepan, $namabelakang) {
    return "<h1>Apa kabar dunia laravel</h1>
    Selamat datang ". $namadepan." ". $namabelakang;
});