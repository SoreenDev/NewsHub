<?php


use App\AdminDashboard\UserManagement\Controllers\AuthController;

Route::prefix('auth')->controller(AuthController::class)->group(function () {
    Route::get('/register-page', 'registerPage')->name('auth.register');
    Route::Post('/register', 'register')->name('register');
    Route::get('/login-page', 'loginPage')->name('auth.login');
    Route::get('login', 'login')->name('login');
});

Route::get('external404/{message?}', function ($message = null) {
    return view('etc.External404', ['message' =>$message]);
})->name('external404');
