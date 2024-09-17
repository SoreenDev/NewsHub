<?php

namespace App\AdminDashboard\UserManagement\Controllers;

use App\AdminDashboard\UserManagement\Request\Auth\loginAuthRequest;
use App\Core\Controllers\Controller;
use Illuminate\Contracts\View\View;

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

    /**
     * @return
     */
    public function login(loginAuthRequest $request)
    {
//        if (! Auth::attempt([$request->validated()]))
//            return redirect()->back()->with('error','invalid Credentials');

        $user=\Domain\AdminDashboard\UserManagement\Models\User::first();
        dd($user->roles());
    }
}
