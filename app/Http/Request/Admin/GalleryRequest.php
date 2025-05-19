<?php

namespace App\Http\Request\Admin;

use System\Request\Request;

class GalleryRequest extends Request
{
    public function rules(): array
    {

        if (methodField() == 'put') {

            return [
                'title' => "required|min:5|max:127",
                'image' => "file|mimes:jpeg,jpg,png,gif",
                'amount' => "required|max:191",
                'address' => "required|min:10|max:250",
                'body' => "required|min:10|max:1000",
                'url' => "required|min:5|max:191",
            ];

        } else {
            return [
                'title' => "required|min:5|max:127",
                'image' => "required|file|mimes:jpeg,jpg,png,gif",
                'amount' => "required|max:191",
                'address' => "required|min:10|max:250",
                'body' => "required|min:10|max:1000",
                'url' => "required|min:5|max:191",
            ];
        }

    }

}