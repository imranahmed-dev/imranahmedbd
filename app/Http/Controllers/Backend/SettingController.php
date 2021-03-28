<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Validator;

class SettingController extends Controller
{
    public function index(){
        $data['setting'] = Setting::latest()->first();
        return view('backend.setting.index-setting',$data);
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'logo' => 'mimes:jpg,jpeg,png',
            'emai_one' => 'email',
            'emai_two' => 'email',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Something went wront!, Please try again...',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        }

        
        $setting = Setting::find($id);

        $setting->facebook_link                      =  $request->facebook_link;
        $setting->twitter_link                       =  $request->twitter_link;
        $setting->instagram_link                     =  $request->instagram_link;
        $setting->linkedin_link                      =  $request->linkedin_link;
        $setting->github_link                        =  $request->github_link;
        $setting->youtube_link                       =  $request->youtube_link;

        $setting->mobile_one                         =  $request->mobile_one;
        $setting->mobile_two                         =  $request->mobile_two;
        $setting->email_one                          =  $request->email_one;
        $setting->email_two                          =  $request->email_two;

        $setting->address                            =  $request->address;
        $setting->map_link                           =  $request->map_link;
        $setting->short_about                        =  $request->short_about;
        $setting->about_me                           =  $request->about_me;
        $setting->terms_condition                    =  $request->terms_condition;
        $setting->privacy_policy                     =  $request->privacy_policy;

        // Image
        $image = $request->file('logo');
        if ($image) {
            $image_path = public_path($setting->logo);
            @unlink($image_path);
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploaded/logo'), $imageName);
            $setting->logo = '/uploaded/logo/' . $imageName;
        }

        $setting->save();

        $notification = array(
            'message' => 'Setting updated successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
