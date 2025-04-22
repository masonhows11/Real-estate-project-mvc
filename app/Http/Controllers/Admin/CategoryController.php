<?php

namespace App\Http\Controllers\Admin;


use App\Models\Category;

class CategoryController extends AdminController {



    public function index()
    {
        $categories = Category::all();
        dd($categories);
        return view('admin.category.index');
    }


    public function create()
    {

        return view('admin.category.create');
    }


    public function store()
    {
    }


    public function edit(){
    }


    public function update(){
    }


    public function delete()
    {
    }

}