<?php

namespace App\Http\Request\Admin;

use System\Request\Request;

class CategoryRequest extends Request
{

    public function rules(): array
    {
        return[

            'name' => "required|min:10|max:191",
            'parent_id' => "exists:categories,id"

        ];
    }

}