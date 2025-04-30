<?php

namespace App\Http\Request\Admin;

class PostRequest
{
    public function rules(): array
    {
        return[

            'name' => "required|min:5|max:30",
            'parent_id' => "exists:categories,id"

        ];
    }
}