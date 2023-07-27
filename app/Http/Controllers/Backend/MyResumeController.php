<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MyResumeEducationJob;
use App\Models\MyResumeprofessionalSkills;
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
            'title' => 'required',
            'short_description' => 'required',
            'degree' => 'required',
            'subtitle' => 'required',

            'type' => 'required',
        ]);


        DB::beginTransaction();

        try {



            MyResumeEducationJob::insert([
                'title' => $request->title,
                'short_description' => $request->short_description,
                'degree' => $request->degree,
                'subtitle' => $request->subtitle,
                'status' => 1,
                'type' => $request->type,
                'created_at' => Carbon::now('Asia/Dubai'),

            ]);




            DB::commit();

            $notification = array(
                'message' => 'Education Job Card Inserted Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('admin_my_resume_education_job_view')->with($notification);
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
            $myresume_educ_job = MyResumeEducationJob::findOrFail($id);
            $myresume_educ_job->delete();
            $notification = array(
                'message' => 'Social Media Deleted Successfully',
                'alert-type' => 'error'
            );
            DB::commit();
            return redirect()->back()->with($notification);
        } catch (\Exception $e) {
            DB::rollBack();

            $notification = array(
                'message' => 'Failed to delete Education Job Card',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        } // END METHOD


    }


    public function EditResumeEducationJob($id)
    {
        $myresume_educ_job = MyResumeEducationJob::findOrFail($id)->first();
        return view('admin.my_resume.education_job.education_job_edit', compact('myresume_educ_job'));
    } // END METHOD


    public function UpdateResumeEducationJob(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'degree' => 'required',
            'subtitle' => 'required',
            'type' => 'required',
        ]);

        DB::beginTransaction();

        try {
            MyResumeEducationJob::where('id', $request->id)->update([
                'title' => $request->title,
                'short_description' => $request->short_description,
                'degree' => $request->degree,
                'subtitle' => $request->subtitle,
                'type' => $request->type,
                'status' => 1,
                'updated_at' => Carbon::now('Asia/Dubai'),
            ]);

            DB::commit(); // If everything goes well, commit the changes to the database.

            $notification = [
                'message' => 'Education Job Card Updated Successfully',
                'alert-type' => 'info'
            ];

            return redirect()->route('admin_my_resume_education_job_view')->with($notification);
        } catch (\Exception $e) {
            DB::rollback(); // If an error occurs, rollback the changes made during the transaction.

            $notification = [
                'message' => 'Something Went Wrong',
                'alert-type' => 'error'
            ];

            return redirect()->back()->with($notification);
        }
    }


    public function ActiveResumeEducationJob($id)
    {
        MyResumeEducationJob::where('id', $id)->update([
            'status' => 1,
        ]);

        $notification = [
            'message' => 'Education Job Card Activeted Updated Successfully',
            'alert-type' => 'info'
        ];

        return redirect()->route('admin_my_resume_education_job_view')->with($notification);
    }

    public function UnActiveResumeEducationJob($id)
    {

        MyResumeEducationJob::where('id', $id)->update([
            'status' => 0,
        ]);

        $notification = [
            'message' => 'Education Job Card An Activeted Successfully',
            'alert-type' => 'info'
        ];

        return redirect()->route('admin_my_resume_education_job_view')->with($notification);
    }






    //////////////////////////////  Professional Skills /////////////////////////////////////////////////////


    public function ViewResumeProfessionalSkills()
    {
        $myresume_prof_skill = MyResumeprofessionalSkills::latest()->get();

        return view('admin.my_resume.professional_skills.professional_skills_view', compact('myresume_prof_skill'));
    } // END METHOD

    public function AddResumeProfessionalSkills()
    {

        return view('admin.my_resume.professional_skills.professional_skills_add');
    } // END METHOD


    public function InsertResumeProfessionalSkills(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'degree' => 'required',
            'type' => 'required',
        ]);


        DB::beginTransaction();

        try {



            MyResumeprofessionalSkills::insert([
                'title' => $request->title,
                'degree' => $request->degree,
                'status' => 1,
                'type' => $request->type,
                'created_at' => Carbon::now('Asia/Dubai'),

            ]);




            DB::commit();

            $notification = array(
                'message' => 'Professional Skills Card Inserted Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('admin_my_resume_professional_skills_view')->with($notification);
        } catch (\Exception $e) {
            DB::rollback();

            $notification = array(
                'message' => 'SomeThing Wrong Heppened',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }
    } // END METHOD





    public function DeleteResumeProfessionalSkills($id)
    {

        try {
            $myresume_educ_job = MyResumeprofessionalSkills::findOrFail($id);
            $myresume_educ_job->delete();
            $notification = array(
                'message' => 'Professional Skills Deleted Successfully',
                'alert-type' => 'error'
            );
            DB::commit();
            return redirect()->back()->with($notification);
        } catch (\Exception $e) {
            DB::rollBack();

            $notification = array(
                'message' => 'Failed to delete Professional Skills Card',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        } // END METHOD


    }


    public function EditResumeProfessionalSkills($id)
    {
        $myresume_prof_skill = MyResumeprofessionalSkills::findOrFail($id)->first();
        return view('admin.my_resume.professional_skills.professional_skills_edit', compact('myresume_prof_skill'));
    } // END METHOD


    public function UpdateResumeProfessionalSkills(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'degree' => 'required',
            'type' => 'required',
        ]);

        DB::beginTransaction();

        try {
            MyResumeprofessionalSkills::where('id', $request->id)->update([
                'title' => $request->title,
                'degree' => $request->degree,
                'type' => $request->type,
                'status' => 1,
                'updated_at' => Carbon::now('Asia/Dubai'),
            ]);

            DB::commit(); // If everything goes well, commit the changes to the database.

            $notification = [
                'message' => 'Professional Skills Card Updated Successfully',
                'alert-type' => 'info'
            ];

            return redirect()->route('admin_my_resume_professional_skills_view')->with($notification);
        } catch (\Exception $e) {
            DB::rollback(); // If an error occurs, rollback the changes made during the transaction.

            $notification = [
                'message' => 'Something Went Wrong',
                'alert-type' => 'error'
            ];

            return redirect()->back()->with($notification);
        }
    }


    public function ActiveResumeProfessionalSkills($id)
    {
        MyResumeprofessionalSkills::where('id', $id)->update([
            'status' => 1,
        ]);

        $notification = [
            'message' => 'Professional Skills Card Activeted Updated Successfully',
            'alert-type' => 'info'
        ];

        return redirect()->route('admin_my_resume_professional_skills_view')->with($notification);
    }

    public function UnActiveResumeProfessionalSkills($id)
    {

        MyResumeprofessionalSkills::where('id', $id)->update([
            'status' => 0,
        ]);

        $notification = [
            'message' => 'Professional Skills Card An Activeted Successfully',
            'alert-type' => 'info'
        ];

        return redirect()->route('admin_my_resume_professional_skills_view')->with($notification);
    }
}
