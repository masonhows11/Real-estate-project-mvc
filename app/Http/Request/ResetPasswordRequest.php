<?php

namespace App\Http\Request;

use System\Request\Request;

class ResetPasswordRequest extends Request
{
    protected function rules(): array
    {
        return [
            'password' => "required|min:8|max:64",
            'new_password' => "required|min:8|max:64",
        ];
    }
}