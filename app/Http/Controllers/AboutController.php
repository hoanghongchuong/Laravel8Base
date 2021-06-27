<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    public function index() {
        $lang = Session::get('website_language');
        $title = trans('about_us');
        $posts = Post::where('status_vi', 1)->where('type', 'about')->orderBy('id','desc')->get();
        $posts->map(function ($post) {
            $post->image_vi = $post->image;
            return $post;
        });
        return view('frontend.pages.about', compact('posts', 'lang', 'title'));
    }

    public function detail($slug) {
        $item = Post::where('slug_vi', $slug)->where('type', 'about')->first();
        $lang = Session::get('website_language');
        $title = isset($item['name_'.$lang]) ? $item['name_'.$lang] : '';
        return view("frontend.pages.detail_about", compact('item', 'title', 'lang'));
    }
}
