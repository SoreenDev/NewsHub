<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Auth.login');
})->name('home');


require  __DIR__ .'/etc.php';
