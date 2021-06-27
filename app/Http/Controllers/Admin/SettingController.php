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
        if($setting) {
            $setting->logo_url = asset($setting->logo);
            $setting->favicon_url = $setting->favicon;
        }

        return view('admin.setting.index', compact('setting'));
    }

    public function store(Request $request)
    {
        $setting = Setting::where('id', $request->setting_id)->first();
        $path_img='upload/images';
        $input = $request->all();
        if($request->has('logo')) {
//            $file = $request->file('logo');
//            $filePath = $file->store('public/image');
//            $input['logo'] = $filePath;

            $img = $request->file('logo');
            $img_name='';
            if(!empty($img)){
                $img_name=time().'_'.$img->getClientOriginalName();
                $img->move($path_img,$img_name);
                $input['logo'] = $path_img.'/'.$img_name;
            }
        }
        if($request->has('favicon')) {
            $file = $request->file('favicon');
//            $filePathIcon = $file->store('public/image');
            $file_name = time().'_'.$file->getClientOriginalName();
            $filePathIcon = $path_img.'/'.$file_name;
            $file->move($path_img, $file_name);
            $input['favicon'] = $filePathIcon;
        }
        if($setting) {
            $oldLogo = $setting->logo;
            $oldFavicon = $setting->favicon;
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
