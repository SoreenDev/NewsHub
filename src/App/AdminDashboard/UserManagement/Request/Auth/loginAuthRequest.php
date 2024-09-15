<?php

namespace App\AdminDashboard\UserManagement\Request\Auth;

use Illuminate\Foundation\Http\FormRequest;

class  loginAuthRequest extends FormRequest
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
//            'email' => ['required','email','exists:users,email'],
            'password' => ['required','min:6','max:12']
        ];
    }

}
