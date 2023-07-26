<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MyResumeEducationJob;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class MyResumeController extends Controller
{
    public function ViewResumeEducationJob()
    {
        $myresume_educ_job = MyResumeEducationJob::latest()->get();

        return view('admin.my_resume.education_job.education_job_view', compact('myresume_educ_job'));
    } // END METHOD

    public function AddResumeEducationJob()
    {

        return view('admin.my_resume.education_job.education_job_add');
    } // END METHOD



    public function InsertResumeEducationJob(Request $request)
    {


        $request->validate([

            'alt_image' => 'required',
            'link' => 'required',
            'title' => 'required',
            'short_description' => 'required',
        ]);


        DB::beginTransaction();

        try {


            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('upload/feature_card/' . $name_gen);
            $save_url = 'upload/feature_card/' . $name_gen;

            MyResumeEducationJob::insert([
                'image' => $save_url,
                'alt_image' => $request->alt_image,
                'updated_at' => Carbon::now(),
                'link' => $request->link,
                'title' => $request->title,
                'short_description' => $request->short_description,
            ]);




            DB::commit();

            $notification = array(
                'message' => 'Feature Card Inserted Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('admin_feature_card_view')->with($notification);
        } catch (\Exception $e) {
            DB::rollback();

            $notification = array(
                'message' => 'SomeThing Wrong Heppened',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }
    } // END METHOD





    public function DeleteResumeEducationJob($id)
    {

        try {
            $bannerSkillsIcon = MyResumeEducationJob::findOrFail($id);
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
                'message' => 'Failed to delete Feature Card',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        } // END METHOD


    }


    public function EditResumeEducationJob($id)
    {
        $banner_ikons = MyResumeEducationJob::findOrFail($id)->first();
        return view('admin.my_resume.education_job.education_job_edit', compact('banner_ikons'));
    } // END METHOD


    public function UpdateResumeEducationJob(Request $request)
    {
        $request->validate([
            'alt_image' => 'required',
            'link' => 'required',
            'title' => 'required',
            'short_description' => 'required',
        ]);

        DB::beginTransaction();

        try {
            $ResumeEducationJob = MyResumeEducationJob::findOrFail($request->id);

            if ($request->hasFile('image')) {
                $oldImage = $ResumeEducationJob->image;
                @unlink($oldImage);

                $image = $request->file('image');
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                $image->move('upload/feature_card/', $name_gen);
                $save_url = 'upload/feature_card/' . $name_gen;

                $ResumeEducationJob->image = $save_url;
            }

            $ResumeEducationJob->alt_image = $request->alt_image;
            $ResumeEducationJob->link = $request->link;
            $ResumeEducationJob->title = $request->title;
            $ResumeEducationJob->short_description = $request->short_description;
            $ResumeEducationJob->updated_at = Carbon::now();
            $ResumeEducationJob->save();

            DB::commit();

            $notification = array(
                'message' => 'Features Card Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('admin_feature_card_view')->with($notification);
        } catch (\Exception $e) {
            DB::rollback();

            $notification = array(
                'message' => 'Something Went Wrong',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }
    }
}
