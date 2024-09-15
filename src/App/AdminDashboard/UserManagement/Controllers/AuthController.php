<?php

namespace App\AdminDashboard\UserManagement\Controllers;

use App\AdminDashboard\UserManagement\Request\Auth\loginAuthRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Support\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
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
