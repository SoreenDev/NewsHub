<?php

namespace App\AdminDashboard\UserManagement\Controllers;

use App\AdminDashboard\UserManagement\Request\Auth\loginAuthRequest;
use App\Core\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * @return View
     */
    public function registerPage(): View
    {
        return view('AdminDashboard.Auth.register');
    }

    public function register()
    {
        //..
    }

    public function loginPage(): View
    {
        return view('AdminDashboard.Auth.login');
    }

    public function login(loginAuthRequest $request )
    {
        if (! Auth::attempt([$request->validated()]))
            return 'error';
//        $user = Auth::user();

        $user->roles();

    }
}
