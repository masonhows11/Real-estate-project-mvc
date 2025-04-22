<?php

namespace App\Http\Controllers\Admin;


class CategoryController extends AdminController {



    public function index()
    {
        dd('index route');
        return view('admin.category.index');
    }


    public function create()
    {
        dd('create route');
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