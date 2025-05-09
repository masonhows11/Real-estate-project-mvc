<?php

namespace App\Http\Request\Admin;

use System\Request\Request;

class AdsRequest extends Request
{
    public function rules(): array
    {
        return [

            'title' => "required|min:5|max:127",
            'description' => "required|min:10",
            'address' => "required|min:10|max:250",
            'amount' => "required",
            'cat_id' => "required|exists:categories,id",
            'image' => "required|file|mimes:jpeg,jpg,png,gif",
            'floor' => "required",
            'year' => "required",
            'storeroom' => "required",
            'balcony' => "required",
            'area' => "required",
            'room' => "required",
            'toilet' => "required",
            'parking' => "required",
            'tag' => "required",
            'status' => "required",
            'sell_status' => "required",
            'type' => "required",
            //'view' => "",



        ];

    }
}