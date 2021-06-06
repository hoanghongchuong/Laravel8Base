<?php


namespace App\Http\Controllers;


use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index() {
        $setting = Setting::first();
        $title = $setting->company_vi;
        $lang = Session::get('website_language');
        return view('frontend.pages.home', compact('title', 'lang'));
    }
    public function changeLanguage(Request $request) {
        $language = $request->language;
        Session::put('website_language', $language);
        return back();
    }
}
