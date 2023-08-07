<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\WebSiteSetting;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class WebSiteSettingController extends Controller
{
    public function EditWebSiteSetting()
    {
        $Setting = WebSiteSetting::where('id', 1)->first();

        return view('admin.website_setting.Setting_update', compact('Setting'));
    } // END METHOD

    public function UpdateWebSiteSetting(Request $request)
    {




        if ($request->logo) {
            $request->validate([

                'logo' => 'required|image|mimes:jpeg,png,jpg,gif',

            ]);
        }

        $request->validate([
            'title' => 'required',
            'alt_logo' => 'required',
            'copy_right' => 'required',
            'meta_description' => 'required',
            'mete_author' => 'required',
            'meta_keywords' => 'required',
            'google_analysis' => 'required',
        ]);

        $old_image = $request->old_img;
        DB::beginTransaction();

        try {

            if ($request->logo  != null) {
                @unlink($old_image);
                $image = $request->file('logo');
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(140, 70)->save('upload/website_setting/' . $name_gen);
                $save_url = 'upload/website_setting/' . $name_gen;

                WebSiteSetting::findOrFail($request->id)->update([
                    'logo' => $save_url,
                    'title' => $request->title,
                    'alt_logo' => $request->alt_logo,
                    'copy_right' => $request->copy_right,
                    'meta_description' => $request->meta_description,
                    'mete_author' => $request->mete_author,
                    'meta_keywords' => $request->meta_keywords,
                    'google_analysis' => $request->google_analysis,
                    'updated_at' => Carbon::now(),
                ]);
            }

            WebSiteSetting::where('id', $request->id)->update([
                'title' => $request->title,
                'alt_logo' => $request->alt_logo,
                'copy_right' => $request->copy_right,
                'meta_description' => $request->meta_description,
                'mete_author' => $request->mete_author,
                'meta_keywords' => $request->meta_keywords,
                'google_analysis' => $request->google_analysis,
                'updated_at' => Carbon::now(),
            ]);

            DB::commit();

            $notification = array(
                'message' => 'Web Site Setting Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('admin_WebSetting_view')->with($notification);
        } catch (\Exception $e) {
            DB::rollback();

            $notification = array(
                'message' => 'SomeThing Wrong Heppened',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }
    } // END METHOD

}
