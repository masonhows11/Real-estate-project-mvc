<?php

namespace App\Http\Controllers\Admin;


use App\Models\Category;
use App\Http\Request\Admin\CategoryRequest;

class CategoryController extends AdminController {



    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index',['categories' => $categories]);
    }


    public function create()
    {

        $categories = Category::whereNull('parent_id')->get();

        return view('admin.category.create',compact('categories'));
    }


    public function store()
    {
        $req = new CategoryRequest();
        $inputs = $req->all();

        if(empty($req->parent_id)) unset($inputs['parent_id']);

        Category::create($inputs);

        return redirect('admin/category/index');
    }


    public function edit($id)
    {

        $category = Category::find($id);
        $categories = Category::all();

        return view('admin.category.edit',compact('category','categories'));

    }


    public function update($id)
    {
        $req = new CategoryRequest();
        $inputs = $req->all();

        if(empty($req->parent_id)) unset($inputs['parent_id']);

        Category::update(array_merge($inputs,['id' => $id]));

        return redirect('admin/category/index');
    }


    public function delete($id)
    {
        dd($id);
    }

}