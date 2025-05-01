<?php

namespace App\Http\Request\Admin;

use System\Request\Request;

class PostRequest extends  Request
{
    public function rules(): array
    {
        return [

            'title' => "required|min:5|max:30",
            'body' => "",
            'user_id' => "",
            'cat_id' => "",
            'image' => "",
            'status' => "",
            'published_at' => "",

        ];
    }
}