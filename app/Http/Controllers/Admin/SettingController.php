<?php


namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('admin.setting.index', compact('setting'));
    }

    public function store(Request $request)
    {
        $setting = Setting::where('id', $request->setting_id)->first();
        if($setting) {
            $setting->update($request->all());
        }else {
            Setting::create($request->all());
        }
        return back()->with('success', 'Updated successfully');
    }
}
