<?php


namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $setting->logo_url = $setting->logo;
        $setting->favicon_url = $setting->favicon;
        return view('admin.setting.index', compact('setting'));
    }

    public function store(Request $request)
    {
        $setting = Setting::where('id', $request->setting_id)->first();
        $oldLogo = $setting->logo;
        $oldFavicon = $setting->favicon;
        $input = $request->all();
        if($request->has('logo')) {
            $file = $request->file('logo');
            $filePath = $file->store('public/image');
            $input['logo'] = $filePath;
        }
        if($request->has('favicon')) {
            $file = $request->file('favicon');
            $filePath = $file->store('public/image');
            $input['favicon'] = $filePath;
        }
        if($setting) {
            $setting->update($input);
            if($request->has('logo')) {
                Storage::disk()->delete($oldLogo);
            }
            if($request->has('favicon')) {
                Storage::disk()->delete($oldFavicon);
            }
        }else {
            Setting::create($input);
        }
        return back()->with('success', 'Updated successfully');
    }
}
