<?php


use App\AdminDashboard\UserManagement\Controllers\AuthController;

Route::prefix('auth')->controller(AuthController::class)->group(function () {
    Route::get('/', 'index')->name('auth.login');
    Route::get('login', 'login')->name('login');
});

Route::get('external404/{message?}', function ($message = null) {
    return view('etc.External404', ['message' =>$message]);
})->name('external404');
