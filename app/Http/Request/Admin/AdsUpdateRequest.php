<?php

namespace App\Http\Request\Admin;

use System\Request\Request;

class AdsUpdateRequest extends Request
{
    public function rules(): array
    {

        return [
            'title' => "required|min:5|max:127",
            'description' => "required|min:10|max:1000",
            'address' => "required|min:10|max:250",
            'amount' => "required|max:191",
            'cat_id' => "required|exists:categories,id",
            'image' => "file|mimes:jpeg,jpg,png,gif",
            'floor' => "required|max:127",
            'year' => "required|number",
            'storeroom' => "required|number",
            'balcony' => "required|number",
            'area' => "required|number",
            'room' => "required|number",
            'toilet' => "required",
            'parking' => "required|number",
            'tag' => "required|max:191",
            'sell_status' => "required|number",
            'type' => "required|number",
        ];

        //        if (methodField() == 'put') {
        //
        //            return [
        //
        //                'title' => "required|min:5|max:127",
        //                'description' => "required|min:10|max:1000",
        //                'address' => "required|min:10|max:250",
        //                'amount' => "required",
        //                'cat_id' => "required|exists:categories,id",
        //                'image' => "file|mimes:jpeg,jpg,png,gif",
        //                'floor' => "required|max:127",
        //                'year' => "required|number",
        //                'storeroom' => "required|number",
        //                'balcony' => "required|number",
        //                'area' => "required|number",
        //                'room' => "required|number",
        //                'toilet' => "required|number",
        //                'parking' => "required|number",
        //                'tag' => "required|max:191",
        //                'status' => "required",
        //                'sell_status' => "required|number",
        //                'type' => "required|type",
        //
        //            ];
        //
        //        } else {
        //
        //            return [
        //                'title' => "required|min:5|max:127",
        //                'description' => "required|min:10|max:1000",
        //                'address' => "required|min:10|max:250",
        //                'amount' => "required",
        //                'cat_id' => "required|exists:categories,id",
        //                'image' => "required|file|mimes:jpeg,jpg,png,gif",
        //                'floor' => "required|max:127",
        //                'year' => "required|number",
        //                'storeroom' => "required|number",
        //                'balcony' => "required|number",
        //                'area' => "required|number",
        //                'room' => "required|number",
        //                'toilet' => "required|number",
        //                'parking' => "required|number",
        //                'tag' => "required|max:191",
        //                'status' => "required",
        //                'sell_status' => "required|number",
        //                'type' => "required|type",
        //
        //            ];
        //        }
    }
}
