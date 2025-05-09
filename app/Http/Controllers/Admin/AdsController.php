<?php

namespace App\Http\Controllers\Admin;

class AdsController extends AdminController{




    public function index()
    {
        
        return view('admin.ads.index');
    }

     public function create()
    {
       
        return view('admin.ads.create');
    }

     public function store()
    {
        # code...
    }


     public function edit($id)
    {
         return view('admin.ads.edit');
    }

     public function update($id)
    {
        # code...
    }

     public function delete($id)
    {
        # code...
    }

     public function changeStatus($id)
    {
        # code...
    }



}