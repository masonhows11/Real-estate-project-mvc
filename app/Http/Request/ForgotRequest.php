<?php

namespace App\Http\Request;

use System\Request\Request;

class ForgotRequest extends Request
{
    protected function rules(): array
    {
        return [

            'email' => "required|email|max:64|exists:users,email",

        ];
    }
}