<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class BannerController extends Controller
{
    public function ViewUpdateBanner()
    {
        $banner = Banner::where('id', 1)->first();
        return view('admin.banner.banner_update', compact('banner'));
    } // END METHOD

    public function UpdateBanner(Request $request)
    {

        if ($request->image) {
            $request->validate([

                'image' => 'required|image|mimes:jpeg,png,jpg,gif',

            ]);
        }

        $request->validate([
            'name' => 'required',
            'welcome_title' => 'required',
            'short_description' => 'required',
        ]);

        $old_image = $request->old_img;
        DB::beginTransaction();

        try {

            if ($request->image  != null) {
                @unlink($old_image);
                $image = $request->file('image');
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(700, 760)->save('upload/banner/' . $name_gen);
                $save_url = 'upload/banner/' . $name_gen;

                Banner::findOrFail($request->id)->update([
                    'name' => $request->name,
                    'welcome_title' => $request->welcome_title,
                    'image' => $save_url,
                    'short_description' => $request->short_description,
                    'alt_imgage'=>$request->alt_imgage,
                    'updated_at' => Carbon::now(),
                ]);
            }

            Banner::where('id', $request->id)->update([
                'name' => $request->name,
                'welcome_title' => $request->welcome_title,
                'short_description' => $request->short_description,
                'alt_imgage'=>$request->alt_imgage,
                'updated_at' => Carbon::now(),
            ]);

            DB::commit();

            $notification = array(
                'message' => 'Banner Inserted Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('admin.banner.view')->with($notification);
        } catch (\Exception $e) {
            DB::rollback();

            $notification = array(
                'message' => 'Banner Inserted Successfully',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }
    } // END METHOD


public function SkillsIconeBannerView(){


     } // END METHOD







}
