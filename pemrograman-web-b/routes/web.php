<?php

use Illuminate\Support\Facades\Route;

// controller
use App\Http\Controllers\PageController;
use App\Http\Controllers\HalamanController;

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

Route::get('/belajar/laravel', function () {
    echo '<h1>Apa kabar dunia laravel</h1>';
    echo 'belajar laravel tetep asikkkk....';
});

Route::get('/biodata/{namadepan}/{namabelakang}', function ($namadepan, $namabelakang) {
    return "<h1>Apa kabar dunia laravel</h1>
            Selamat datang $namadepan $namabelakang";
});

// tanpa controller
Route::get('/web', function () {
    return view('web_home');
})->name('web.home');
Route::get('/web/about', function () {
    return view('web_about');
})->name('web.about');
Route::get('/web/contact', function () {
    return view('web_contact');
})->name('web.contact');

// dengan PageController
Route::get('/new/home', [PageController::class, 'home'])->name('home');
Route::get('/new/about', [PageController::class, 'about'])->name('about');
Route::get('/new/contact', [PageController::class, 'contact'])->name('contact');

// dengan HalamanController
Route::get('/baru/home', [HalamanController::class, 'home'])->name('topmenu1');
Route::get('/baru/about', [HalamanController::class, 'about'])->name('topmenu2');
Route::get('/baru/contact', [HalamanController::class, 'contact'])->name('topmenu3');