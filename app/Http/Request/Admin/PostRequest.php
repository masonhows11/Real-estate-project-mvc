<?php

namespace App\Http\Request\Admin;

use System\Request\Request;

class PostRequest extends Request
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

        // for update post
        //        if (methodField() == 'put')
        //        {
        //            return [
        //
        //                'title' => "required|min:5|max:127",
        //                'body' => "required",
        //                'cat_id' => "required|exists:categories,id",
        //                'image' => "file|mimes:jpeg,jpg,png,gif",
        //                'published_at' => "required|date",
        //
        //
        //            ];
        //        } else {
        //            // for new post
        //            return [
        //
        //                'title' => "required|min:5|max:127",
        //                'body' => "required",
        //                'cat_id' => "required|exists:categories,id",
        //                'image' => "required|file|mimes:jpeg,jpg,png,gif",
        //                'published_at' => "date",
        //                //'published_at' => "required|date",
        //
        //            ];
        //        }

    }
}
