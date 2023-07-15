<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\BannerSkillsIcon;
use App\Models\SocialMedia;
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
            'alt_image' => 'required',
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
                    'alt_image' => $request->alt_image,
                    'updated_at' => Carbon::now(),
                ]);
            }

            Banner::where('id', $request->id)->update([
                'name' => $request->name,
                'welcome_title' => $request->welcome_title,
                'short_description' => $request->short_description,
                'alt_image' => $request->alt_image,
                'updated_at' => Carbon::now(),
            ]);

            DB::commit();

            $notification = array(
                'message' => 'Banner Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('admin.banner.view')->with($notification);
        } catch (\Exception $e) {
            DB::rollback();

            $notification = array(
                'message' => 'SomeThing Wrong Heppened',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }
    } // END METHOD






    // ////////////////////////////// Banner Skills Icon  Start  //////////////////////////////////////////////





    public function SkillsIconeBannerView()
    {
        $banner_ikons = BannerSkillsIcon::latest()->get();
        return view('admin.skills_icone_banner.skills_icone_banner_view', compact('banner_ikons'));
    } // END METHOD


    public function AddSkillsIconBanner()
    {

        return view('admin.skills_icone_banner.skills_icone_banner_add');
    } // END METHOD



    public function InsertSkillsIconBanner(Request $request)
    {


        $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg,gif',
            'alt_image' => 'required',
        ]);


        DB::beginTransaction();

        try {


            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('upload/banner/skills_icon/' . $name_gen);
            $save_url = 'upload/banner/skills_icon/' . $name_gen;

            BannerSkillsIcon::insert([
                'image' => $save_url,
                'alt_image' => $request->alt_image,
                'updated_at' => Carbon::now(),
            ]);




            DB::commit();

            $notification = array(
                'message' => 'Banner Skills Icone Inserted Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('admin.banner.skills.icon.view')->with($notification);
        } catch (\Exception $e) {
            DB::rollback();

            $notification = array(
                'message' => 'SomeThing Wrong Heppened',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }
    } // END METHOD





    public function DeleteSkillsIconBanner($id)
    {

        try {
            $bannerSkillsIcon = BannerSkillsIcon::findOrFail($id);
            $bannerSkillsIcon->delete();
            $notification = array(
                'message' => 'Banner Icon Skills Deleted Successfully',
                'alert-type' => 'info'
            );
            DB::commit();
            return redirect()->back()->with($notification);
        } catch (\Exception $e) {
            DB::rollBack();

            $notification = array(
                'message' => 'Failed to delete Banner Icon Skills',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        } // END METHOD


    }


    public function EditSkillsIconBanner($id)
    {
        $banner_ikons = BannerSkillsIcon::findOrFail($id)->first();
        return view('admin.skills_icone_banner.skills_icone_banner_edit', compact('banner_ikons'));
    } // END METHOD


    public function UpdateSkillsIconBanner(Request $request)
    {
        if ($request->image) {
            $request->validate([

                'image' => 'required|image|mimes:jpeg,png,jpg,gif',

            ]);
        }

        $request->validate([

            'alt_image' => 'required',
        ]);

        $old_image = $request->old_img;
        DB::beginTransaction();

        try {

            if ($request->image  != null) {
                @unlink($old_image);
                $image = $request->file('image');
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                Image::make($image)->save('upload/banner/skills_icon/' . $name_gen);
                $save_url = 'upload/banner/skills_icon/' . $name_gen;

                BannerSkillsIcon::findOrFail($request->id)->update([
                    'image' => $save_url,
                    'alt_image' => $request->alt_image,
                    'updated_at' => Carbon::now(),
                ]);
            }

            BannerSkillsIcon::where('id', $request->id)->update([
                'alt_image' => $request->alt_image,
                'updated_at' => Carbon::now(),
            ]);

            DB::commit();

            $notification = array(
                'message' => 'Banner Skills Icone Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('admin.banner.skills.icon.view')->with($notification);
        } catch (\Exception $e) {
            DB::rollback();

            $notification = array(
                'message' => 'SomeThing Wrong Heppened',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }
    } // END METHOD









    // ////////////////////////////// Banner Social Media Icon  Start  //////////////////////////////////////////////



    public function SocialMediaIconeBannerView()
    {
        $banner_icons = SocialMedia::latest()->get();
        return view('admin.social_media_icone_banner.social_media_icone_banner_view', compact('banner_icons'));
    } // END METHOD


    public function AddSocialMediaIconBanner()
    {

        return view('admin.social_media_icone_banner.social_media_icone_banner_add');
    } // END METHOD



    public function InsertSocialMediaIconBanner(Request $request)
    {


        $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg,gif',
            'alt_image' => 'required',
            'link' => 'required',
        ]);


        DB::beginTransaction();

        try {


            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('upload/banner/social_media/' . $name_gen);
            $save_url = 'upload/banner/social_media/' . $name_gen;

            $t =   SocialMedia::insert([
                'image' => $save_url,
                'alt_image' => $request->alt_image,
                'updated_at' => Carbon::now(),
                'link' => $request->link,
            ]);




            DB::commit();

            $notification = array(
                'message' => 'Banner Skills Icone Inserted Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('admin.banner.social.media.icon.view')->with($notification);
        } catch (\Exception $e) {
            DB::rollback();

            $notification = array(
                'message' => 'SomeThing Wrong Heppened',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }
    } // END METHOD





    public function DeleteSocialMediaIconBanner($id)
    {

        try {
            $bannerSkillsIcon = SocialMedia::findOrFail($id);
            $bannerSkillsIcon->delete();
            $notification = array(
                'message' => 'Social Media Deleted Successfully',
                'alert-type' => 'error'
            );
            DB::commit();
            return redirect()->back()->with($notification);
        } catch (\Exception $e) {
            DB::rollBack();

            $notification = array(
                'message' => 'Failed to delete Banner Icon Social Media',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        } // END METHOD


    }


    public function EditSocialMediaIconBanner($id)
    {
        $banner_ikons = SocialMedia::findOrFail($id)->first();
        return view('admin.social_media_icone_banner.social_media_icone_banner_edit', compact('banner_ikons'));
    } // END METHOD


    public function UpdateSocialMediaIconBanner(Request $request)
    {
        if ($request->image) {
            $request->validate([

                'image' => 'required|image|mimes:jpeg,png,jpg,gif',

            ]);
        }

        $request->validate([

            'alt_image' => 'required',
        ]);

        $old_image = $request->old_img;
        DB::beginTransaction();

        try {

            if ($request->image  != null) {
                @unlink($old_image);
                $image = $request->file('image');
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                Image::make($image)->save('upload/banner/skills_icon/' . $name_gen);
                $save_url = 'upload/banner/skills_icon/' . $name_gen;

                SocialMedia::findOrFail($request->id)->update([
                    'image' => $save_url,
                    'alt_image' => $request->alt_image,
                    'updated_at' => Carbon::now(),
                ]);
            }

            SocialMedia::where('id', $request->id)->update([
                'alt_image' => $request->alt_image,
                'updated_at' => Carbon::now(),
            ]);

            DB::commit();

            $notification = array(
                'message' => 'Banner Skills Icone Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('admin.banner.social.media.icon.view')->with($notification);
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
