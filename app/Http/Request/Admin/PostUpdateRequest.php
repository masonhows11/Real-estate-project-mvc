<?php

namespace App\Http\Request\Admin;

use System\Request\Request;

class PostUpdateRequest extends Request
{

    public function rules(): array
    {
        return [

            'title' => "required|min:5|max:127",
            'body' => "required",
            'cat_id' => "required|exists:categories,id",
            'image' => "file|mimes:jpeg,jpg,png,gif",
            'published_at' => "required|date",

        ];
    }
}