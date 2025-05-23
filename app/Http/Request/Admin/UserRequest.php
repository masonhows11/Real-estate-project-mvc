<?php

namespace App\Http\Request\Admin;

use System\Request\Request;

class UserRequest extends Request
{
    protected function rules(): array
    {
        return [
            'first_name' => "required|min:10|max:128",
            'last_name' => "required|min:10|max:128",
            'avatar' => "file|mimes:jpeg,jpg,png,gif",
        ];
    }

}