<?php

namespace App\Http\Request\Admin;

use System\Request\Request;

class GalleryRequest extends Request
{

    public function rules(): array
    {

        return [

            'image' => "required|file|mimes:jpeg,jpg,png,gif",
        ];
    }

}