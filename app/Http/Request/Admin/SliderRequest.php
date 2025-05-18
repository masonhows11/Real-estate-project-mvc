<?php

namespace App\Http\Request\Admin;

use System\Request\Request;

class SliderRequest extends Request
{

    public function rules() : array
    {
        return [
            'title' => "required|min:5|max:127",
            'address' => "required|min:10|max:250",
            'amount' => "required|max:191",
            'image' => "required|file|mimes:jpeg,jpg,png,gif",
            'url' => "required|min:10|max:127",
            'body' => "required|min:10|max:1000"
        ];
    }

}