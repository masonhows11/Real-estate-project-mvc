<?php

namespace App\Http\Request\Admin;

class PostRequest
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