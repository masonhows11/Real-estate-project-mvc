<?php

namespace App\Http\Request\Admin;

use System\Request\Request;

class AdsRequest extends Request
{
    public function rules(): array
    {
        return [

            'title' => "required|min:5|max:127",
            'body' => "required|min:10",
            'cat_id' => "required|exists:categories,id",
            'image' => "required|file|mimes:jpeg,jpg,png,gif",
            'published_at' => "required|date",
            //'published_at' => "date",


        ];
        
    }
}