<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index() {
        return view('frontend.pages.home');
    }
    public function changeLanguage(Request $request) {
        $language = $request->language;
        Session::put('website_language', $language);
        return back();
    }
}
