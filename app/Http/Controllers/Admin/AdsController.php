<?php

namespace App\Http\Controllers\Admin;

use App\Http\Request\Admin\AdsUpdateRequest;
use App\Http\Request\Admin\GalleryRequest;
use App\Models\Ads;
use App\Models\Category;
use App\Models\Gallery;
use App\Http\Request\Admin\AdsRequest;
use App\Http\Services\ImageUpload;
use System\Auth\Auth;

class AdsController extends AdminController
{


    public function index()
    {
        $ads = Ads::all();
        return view('admin.ads.index', compact('ads'));
    }

    public function create()
    {

        $categories = Category::all();
        return view('admin.ads.create', compact('categories'));
    }

    public function store()
    {

        # code...
        $req = new AdsRequest();
        $inputs = $req->all();
        // dd($inputs);
        $inputs['user_id'] = Auth::user()->id;
        $inputs['status'] = 0;
        $inputs['view'] = 0;

        $path = 'images/ads/' . date('Y/m/d');
        $name = date('Y_m_d_H_i_s') . rand(10, 99);
        $inputs['image'] = ImageUpload::uploadAndFitImage($req->file('image'), $path, $name, 800, 532);

        Ads::create($inputs);

        return redirect("/admin/ads/index");

    }


    public function edit($id)
    {
        $ads = Ads::find($id);
        $categories = Category::all();
        return view('admin.ads.edit', compact('ads', 'categories'));
    }

    public function update($id)
    {
        # code...
        $req = new AdsUpdateRequest();
        $inputs = $req->all();

        $inputs['id'] = $id;
        $inputs['user_id'] = Auth::user()->id;
        $file = $req->file('image');

        if (!empty($file['tmp_name'])) {
            $path = 'images/ads/' . date('Y/m/d');
            $name = date('Y_m_d_H_i_s') . rand(10, 99);
            $inputs['image'] = ImageUpload::uploadAndFitImage($req->file('image'), $path, $name, 800, 532);

        }

        Ads::update($inputs);
        return redirect("/admin/ads/index");

    }

    public function delete($id)
    {
        # code...
        Ads::delete($id);
        return redirect("/admin/ads/index");

    }

    public function changeStatus($id)
    {
        $post = Ads::find($id);

        $inputs = [];

        if ($post->status == 0) {

            $inputs['id'] = $id;
            $inputs['status'] = 1;
            Ads::update($inputs);

        } else {

            $inputs['id'] = $id;
            $inputs['status'] = 0;

            Ads::update($inputs);
        }


        return back();
    }

    public function gallery($id): null
    {
        $adv = Ads::find($id);
        $galleries = Gallery::where('advertise_id', $adv->id)->get();
        return view('admin.ads.gallery', compact('adv', 'galleries'));
    }

    public function storeGallery($id)
    {
        $req = new GalleryRequest();
        $inputs = [];
        ////
        $inputs['advertise_id'] = $id;
        ////
        $path = 'images/galleries/' . date('Y/m/d');
        $name = date('Y_m_d_H_i_s') . rand(10, 99);
        $inputs['image'] = ImageUpload::uploadAndFitImage($req->file('image'), $path, $name, 730, 400);

        Gallery::create($inputs);
        return back();
    }

    public function deleteGallery($gallery_id)
    {
        Ads::delete($gallery_id);
        return back();
    }


}