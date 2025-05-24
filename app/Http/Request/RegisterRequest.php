<?php

namespace App\Http\Request;


use System\Request\Request;

class RegisterRequest extends Request
{

    protected function rules(): array
    {
        return [

            'email' => "required|max:64|email|unique:users,email",
            'password' => "required|min:8|max:64|confirmed",
            'first_name' => "required|max:64|min:4",
            'last_name' => "required|max:64|min:4",
            'avatar' => "file|mimes:jpeg,jpg,png,gif|max:2048",

        ];
    }
}