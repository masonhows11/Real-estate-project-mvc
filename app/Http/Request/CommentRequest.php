<?php

namespace App\Http\Request;

use System\Request\Request;

class CommentRequest extends Request
{
    protected function rules(): array
    {
        return [
            'comment' => "required|min:10|max:1500"
        ];
    }
}