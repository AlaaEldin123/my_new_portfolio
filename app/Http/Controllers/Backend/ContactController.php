<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ContactWithMe;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
class ContactController extends Controller
{
    public function ViewUpdateContactWithMe()
    {
        $contact_with_me = ContactWithMe::where('id', 1)->first();
        return view('admin.contact_with_me.contact_with_me_update', compact('contact_with_me'));
    } // END METHOD

    public function UpdateContactWithMe(Request $request)
    {

        if ($request->image) {
            $request->validate([

                'image' => 'required|image|mimes:jpeg,png,jpg,gif',

            ]);
        }

        $request->validate([
            'alt_image'=>'required|string',
            'name'=>'required|string',
            'position_job'=>'required|string',
            'short_description'=>'required|string',
            'first_Phone'=>'required|string',
            'second_Phone'=>'required|string',
            'first_email'=>'required|string',
            'second_email'=>'required|string',
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

                ContactWithMe::where('id', 1)->update([
                    'image'=>$save_url,
                    'alt_image'=>$request->alt_image,
                    'name'=>$request->name,
                    'position_job'=>$request->position_job,
                    'short_description'=>$request->short_description,
                    'first_Phone'=>$request->first_Phone,
                    'second_Phone'=>$request->second_Phone,
                    'first_email'=>$request->first_email,
                    'second_email'=>$request->second_email,
                    'updated_at' => Carbon::now(),
                ]);
            }

            ContactWithMe::where('id', 1)->update([
         
                'alt_image'=>$request->alt_image,
                'name'=>$request->name,
                'position_job'=>$request->position_job,
                'short_description'=>$request->short_description,
                'first_Phone'=>$request->first_Phone,
                'second_Phone'=>$request->second_Phone,
                'first_email'=>$request->first_email,
                'second_email'=>$request->second_email,
                'updated_at' => Carbon::now(),
            ]);

            DB::commit();

            $notification = array(
                'message' => 'Contact With Me Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('admin_ContactWithMe_view')->with($notification);
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
