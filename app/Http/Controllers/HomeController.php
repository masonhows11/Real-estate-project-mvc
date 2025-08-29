<?php

namespace App\Http\Controllers;


use App\Models\Ads;
use App\Models\Post;

class HomeController extends Controller
{

    public function index()
    {

        $latestAds = Ads::orderBy('created_at', 'desc')->limit(0, 6)->get();
        $bestAds = Ads::orderBy('view', 'desc')->limit(0, 4)->get();
        $posts = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->orderBy('created_at', 'desc')->limit(0, 6)->get();
        return view('app.home', compact('latestAds', 'bestAds', 'posts'));
    }

    public function about()
    {
       return view('app.about');
    }

    public function contact()
    {
        return view('app.contact');
    }

//    public function create()
//    {
//        echo "create method in HomeController";
//    }
//
//    public function store()
//    {
//        echo "store method in HomeController";
//    }
//
//    public function edit($id)
//    {
//        echo "edit method in HomeController";
//    }
//
//    public function update($id)
//    {
//        echo "update method in HomeController";
//    }
//
//    public function delete($id)
//    {
//        echo "delete method in HomeController";
//    }

}