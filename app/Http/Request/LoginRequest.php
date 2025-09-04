<?php

namespace App\Http\Request;

use System\Request\Request;

class LoginRequest extends Request
{
    protected function rules(): array
    {
        return [

            'email' => "required|email",
            'password' => "required",

        ];
    }
}