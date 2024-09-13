<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
//    return view('Auth.login');
    dd(\Domain\AdminDashboard\UserManagement\Models\Role::all());
})->name('home');

