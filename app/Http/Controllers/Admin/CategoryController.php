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

        return view('admin.category.create');
    }


    public function store()
    {
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