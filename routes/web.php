<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'ok';
})->name('home');


require  __DIR__ .'/etc.php';
