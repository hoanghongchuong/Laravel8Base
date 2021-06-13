<?php


namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index() {
        $setting = Setting::first();
        $title = $setting->company_vi;
        $lang = Session::get('website_language');
        $equipments = Post::where('status_vi', 1)->where('type', 'equipment')->orderBy('id','desc')->get();
        $equipments->map(function ($eq) {
           $eq->img_url = $eq->image;
        });
        $posts = Post::where('status_vi', 1)->where('type', 'post')->orderBy('id','desc')->limit(3)->get();
        $posts->map(function ($post) {
            $post->img_url = $post->image;
        });

        $expertise = Post::where('status_vi', 1)->where('type', 'expertise')->orderBy('id','desc')->get();
        $expertise->map(function ($ex) {
            $ex->img_url = $ex->image;
        });
        $services = Post::where('status_vi', 1)->where('type', 'service')->orderBy('id','desc')->get();
        $services->map(function ($eq) {
            $eq->icon_url = $eq->icon;
        });
        $aboutTech = Post::where('status_vi', 1)->where('type', 'about-tech')->orderBy('id','desc')->first();
        if($aboutTech) {
            $aboutTech->img_url = $aboutTech->image;
        }

        return view('frontend.pages.home', compact('title', 'lang', 'equipments', 'posts', 'expertise', 'services','aboutTech', 'setting'));
    }
    public function changeLanguage(Request $request) {
        $language = $request->language;
        Session::put('website_language', $language);
        return back();
    }

    public function equipment() {
        $lang = Session::get('website_language');
        $title = trans('equipment');
        $posts = Post::where('status_vi', 1)->where('type', 'equipment')->orderBy('id','desc')->get();
        $posts->map(function ($post) {
            $post->image_vi = $post->image;
            return $post;
        });
        return view('frontend.pages.equipment', compact('title', 'lang', 'posts'));
    }

    public function equipmentDetail($slug) {
        $item = Post::where('slug_vi', $slug)->where('type', 'equipment')->first();
        $lang = Session::get('website_language');
        $title = $item['name_'.$lang];
        return view("frontend.pages.detail_about", compact('item', 'title', 'lang'));
    }
    public function postDetail($slug) {
        $item = Post::where('slug_vi', $slug)->where('type', 'post')->first();
        $lang = Session::get('website_language');
        $title = $item['name_'.$lang];
        return view("frontend.pages.detail_about", compact('item', 'title', 'lang'));
    }

    public function technology() {
        $lang = Session::get('website_language');
        $title = trans('technology_ras');
        $problems = Post::where('status_vi', 1)->where('type', 'problem')->orderBy('id','asc')->get();
        $problems->map(function ($problem) {
            $problem->image_vi = $problem->image;
            return $problem;
        });
        $solutions = Post::where('status_vi', 1)->where('type', 'solution')->orderBy('id','asc')->get();
        $solutions->map(function ($sl) {
            $sl->image_vi = $sl->image;
            return $sl;
        });
        $postTech = Post::where('status_vi', 1)->where('type', 'post-tech')->orderBy('id','asc')->get();

        return view('frontend.pages.technology', compact('lang', 'title', 'problems', 'solutions', 'postTech'));
    }
}
