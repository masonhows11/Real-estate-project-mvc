<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ads;
use App\Models\Category;
use App\Models\Gallery;
use App\Http\Request\Admin\AdsRequest;
use App\Http\Services\ImageUpload;
use System\Auth\Auth;

class AdsController extends AdminController{




    public function index()
    {
        $ads = Ads::all();
        return view('admin.ads.index',compact('ads'));
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

    public function gallery($id): null
    {
        return view('admin.ads.gallery');
    }



}