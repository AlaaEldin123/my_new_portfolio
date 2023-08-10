<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    public function ViewTestimonial()
    {
        $testimonial = Testimonial::latest()->get();
        return view('admin.testimonial.testimonial_view', compact('testimonial'));
    } // END METHOD


    public function AddTestimonial()
    {

        return view('admin.testimonial.testimonial_add');
    } // END METHOD

    public function InsertTestimonial(Request $request)
    {

        // Validate the incoming form data
        $request->validate([
            'title' => 'required|string',
            'from_date_to_date' => 'required|string',
            'short_description' => 'required|string',
            'testimonial_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'alt_image' => 'required|string',
            'testimonial_name' => 'required|string',
            'testimonial_company' => 'required|string',
            'testimonial_position' => 'required|string',
        ]);

        // Handle file uploads

        $image = $request->file('testimonial_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save('upload/testimonial/' . $name_gen);
        $viewImagePath = 'upload/testimonial/' . $name_gen;




        // Create a new Testimonial instance and populate it with the form data

        Testimonial::insert([
            'title' => $request->title,
            'from_date_to_date' => $request->from_date_to_date,
            'short_description' => $request->short_description,
            'testimonial_image' => $viewImagePath,
            'alt_image' => $request->alt_image,
            'testimonial_name' => $request->testimonial_name,
            'testimonial_company' => $request->testimonial_company,
            'testimonial_position' => $request->testimonial_position,
            'created_at' => Carbon::now('Asia/Dubai'),

        ]);

        $notification = array(
            'message' => 'Testimonial Created Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('admin_testimonial_view')->with($notification);
    }

    public function DeleteTestimonial($id)
    {
        try {
            $testimonial_image = Testimonial::findOrFail($id);

            // Check the number of testimonials
            $testimonialCount = Testimonial::count();
            if ($testimonialCount <= 1) {
                $notification = array(
                    'message' => 'Cannot delete the only testimonial',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            }

            @unlink($testimonial_image->testimonial_image);

            $testimonial_image->delete();
            $notification = array(
                'message' => 'Testimonial Deleted Successfully',
                'alert-type' => 'success'
            );
            DB::commit();
            return redirect()->back()->with($notification);
        } catch (\Exception $e) {
            DB::rollBack();

            $notification = array(
                'message' => 'Failed to delete Testimonial',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }
    }



    public function EditTestimonial($id)
    {
        $testimonial = Testimonial::findOrFail($id)->first();
        return view('admin.testimonial.testimonial_edit', compact('testimonial'));
    } // END METHOD


    // Import the custom validation rule

    public function UpdateTestimonial(Request $request)
    {

        // Validate the testimonial image if it exists
        if ($request->testimonial_image) {
            $request->validate([

                'testimonial_image' => 'required|image|mimes:jpeg,png,jpg,gif',

            ]);
        }

        $request->validate([
            'title' => 'required|string',
            'from_date_to_date' => 'required|string', // Use the custom rule here
            'short_description' => 'required|string',
            'alt_image' => 'required|string',
            'testimonial_name' => 'required|string',
            'testimonial_company' => 'required|string',
            'testimonial_position' => 'required|string',
        ]);

        DB::beginTransaction();

        try {
            if ($request->hasFile('testimonial_image')) {
                // Process and save the uploaded testimonial image
                $oldImage = $request->old_img;
                @unlink($oldImage);

                $image = $request->file('testimonial_image');
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                $image->move('upload/testimonial/', $name_gen);
                $viewImagePath = 'upload/testimonial/' . $name_gen;

                Testimonial::where('id',$request->id)->update([
                    'title' => $request->title,
                    'from_date_to_date' => $request->from_date_to_date,
                    'short_description' => $request->short_description,
                    'testimonial_image' => $viewImagePath,
                    'alt_image' => $request->alt_image,
                    'testimonial_name' => $request->testimonial_name,
                    'testimonial_company' => $request->testimonial_company,
                    'testimonial_position' => $request->testimonial_position,
                    'updated_at' => Carbon::now('Asia/Dubai'),
                ]);
            } else {
                Testimonial::findOrFail($request->id)->update([
                    'title' => $request->title,
                    'from_date_to_date' => $request->from_date_to_date,
                    'short_description' => $request->short_description,
                    'alt_image' => $request->alt_image,
                    'testimonial_name' => $request->testimonial_name,
                    'testimonial_company' => $request->testimonial_company,
                    'testimonial_position' => $request->testimonial_position,
                    'updated_at' => Carbon::now('Asia/Dubai'),
                ]);
            }

            DB::commit();

            $notification = array(
                'message' => 'Testimonial Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('admin_testimonial_view')->with($notification);
        } catch (\Exception $e) {
            DB::rollback();

            $notification = array(
                'message' => 'Something Went Wrong',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }
    }




    public function ActiveTestimonial($id)
    {
        Testimonial::where('id', $id)->update([
            'status' => 1,
        ]);

        $notification = [
            'message' => 'Testimonial Activeted Updated Successfully',
            'alert-type' => 'info'
        ];

        return redirect()->route('admin_testimonial_view')->with($notification);
    }

    public function UnActiveTestimonial($id)
    {

        Testimonial::where('id', $id)->update([
            'status' => 0,
        ]);

        $notification = [
            'message' => 'Testimonial Un Activeted Successfully',
            'alert-type' => 'info'
        ];

        return redirect()->route('admin_testimonial_view')->with($notification);
    }
}
