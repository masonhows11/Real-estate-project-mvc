<?php

namespace App\Http\Controllers\Admin;

class SliderController extends AdminController
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

    public function delete($id)
    {
        # code...
        Ads::delete($id);
        return redirect("/admin/ads/index");

    }
}