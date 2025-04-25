<?php

namespace App\Http\Controllers\Admin;


use App\Models\Category;

class CategoryController extends AdminController {



    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index',['categories' => $categories]);
    }


    public function create()
    {

        $categories = Category::whereNull('parent_id')->get();
        dd($categories);
        return view('admin.category.create',compact('categories'));
    }


    public function store()
    {
        dd($_POST);
    }


    public function edit($id)
    {
        dd($id);
    }


    public function update(){
    }


    public function delete($id)
    {
        dd($id);
    }

}