<?php

namespace App\Http\Controllers;


use App\Models\Ads;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use JetBrains\PhpStorm\NoReturn;
use Morilog\Jalali\Jalalian;
use System\Auth\Auth;
use App\Http\Request\CommentRequest;

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

    public function ads($id): null
    {
        $ads = Ads::find($id);
        $galleries = $ads->galleries()->get(); // check code galleries relation & get method
        $posts = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->orderBy('created_at', 'desc')->limit(0, 3)->get();
        $related_ads = Ads::where('cat_id', $ads->cat_id)->where('id', '!=', $id)->orderBy('created_at', 'desc')->limit(0, 2)->get();
        $categories = Category::all();
        return view('app.property_single', compact('categories', 'ads', 'galleries', 'posts'));
    }

    public function ads_list(): null
    {

        $ads = Ads::all();
        return view('app.ads_index', compact('ads'));
    }

    public function all_post(): null
    {
        $posts = Post::where('published_at', '<=', date('Y-m-d H:i:s'))
            ->orderBy('created_at', 'asc')->get();
        return view('app.blogs', compact('posts'));
    }

    public function post($id)
    {
        $categories = Category::all();
        $posts = Post::where('published_at', '<=', date('Y-m-d H:i:s'))
            ->orderBy('created_at', 'desc')->limit(0, 4)->get();
        $post = Post::find($id);
        $comments = Comment::where('approved', 1)->whereNull('parent_id')->where('post_id', $id)->get();
        return view('app.blog', compact('post', 'posts', 'categories', 'comments'));
    }

    public function addComment()
    {

        $request = new CommentRequest();
        $inputs = $request->all();
        $inputs['post_id'] = $inputs['id'];
        $inputs['approved'] = 0;
        $inputs['status'] = 0;
        $inputs['user_id'] = Auth::user()->id;
        $comment = Comment::create($inputs);
        return back();

        #
    }

     public function searchSection(): null
    {
        $posts = '';
        $ads = '';
        if (isset($_GET['search'])) {
            $search = '%' . $_GET['search'] . '%';
            $posts = Post::where('title', 'like', $search)->get();
            $ads = Ads::where('title', 'like', $search)->whereOr('tag', 'like', $search)->get();



            return view('app.search', compact('posts', 'ads',));
        } else {
            return back();
        }


    }


    public function ajaxPosts()
    {
        $posts = Post::where('published_at', '<=', date('Y-m-d H:i:s'))
            ->orderBy('created_at', 'asc')->limit(0,4)->get();


        foreach ($posts as $post){
            $post->user = $post->user()->first_name .''.$post->user()->last_name;
            unset($post->user_id);
            $post->created_at = Jalalian::forge($post->created_at)->format('%A, %d %B %y');
            $post->url = route('post',['id'=>$post->id]);
        }

        // set this header
        header('Content-type: application/json');
        $result = json_encode($posts,JSON_UNESCAPED_UNICODE);
        echo $result;
        exit();

    }


}
