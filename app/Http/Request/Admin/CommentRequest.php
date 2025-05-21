<?php

namespace App\Http\Request\Admin;

use System\Request\Request;

class CommentRequest extends Request
{
    public function rules(): array
    {
        return [
            'comment' => "required|min:10|max:1000",
        ];


    }
}
