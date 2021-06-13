<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    public function index() {
        $lang = Session::get('website_language');
        $title = trans('service');
        $posts = Post::where('status_vi', 1)->where('type', 'service')->orderBy('id','desc')->get();
        $posts->map(function ($post) {
            $post->image_vi = $post->image;
            return $post;
        });
        return view('frontend.pages.service', compact('posts', 'lang', 'title'));
    }

    public function detail($slug) {
        $item = Post::where('slug_vi', $slug)->where('type', 'service')->first();
        if($item) {
            $item->image_vi = $item->image;
            $lang = Session::get('website_language');
            $title = $item['name_'.$lang];
            return view("frontend.pages.detail_service", compact('item', 'title', 'lang'));
        }
        else{
            abort(404);
        }
    }
}
