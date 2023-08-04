<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function ViewBlogs()
    {
        $blog = Blog::latest()->get();
        return view('admin.blogs.blog_view', compact('blog'));
    } // END METHOD


    public function AddBlogs()
    {

        return view('admin.blogs.blog_add');
    } // END METHOD

    public function InsertBlogs(Request $request)
    {



        $request->validate([


            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'alt_image' => 'required|string',
            'small_title' => 'required|string',
            'title' => 'required|string',
            'created_date' => 'required|date',
            'full_editor_data' => 'required',

        ]);

        // Handle file uploads

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save('upload/blog/' . $name_gen);
        $viewImagePath = 'upload/blog/' . $name_gen;





        // Create a new Blog instance and populate it with the form data

        $portfolio = Blog::insert([

            'small_title' => $request->small_title,
            'title' => $request->title,
            'created_date' => $request->created_date,
            'image' => $viewImagePath,
            'alt_image' => $request->alt_image,
            'long_description' => $request->full_editor_data,
            'created_at' => Carbon::now('Asia/Dubai'),
            'status' => 1,

        ]);

        $notification = array(
            'message' => 'Blog Created Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('view_admin_blogs')->with($notification);
    }


    public function DeleteBlogs($id)
    {

        try {
            $bannerSkillsIcon = Blog::findOrFail($id);
            @unlink($bannerSkillsIcon->image);


            $bannerSkillsIcon->delete();
            $notification = array(
                'message' => 'Blog Deleted Successfully',
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


    public function EditBlogs($id)
    {
        $blog = Blog::findOrFail($id)->first();
        return view('admin.blogs.blog_edit', compact('blog'));
    } // END METHOD



    public function updateBlogs(Request $request)
    {
        if (
            $request->view_image
        ) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif',

            ]);
        }
        $request->validate([
            'alt_image' => 'required|string',
            'small_title' => 'required|string',
            'title' => 'required|string',
            'created_date' => 'required|date',
            'full_editor_data' => 'required',
        ]);

        try {
            DB::beginTransaction();

            $blog = Blog::findOrFail($request->id);

            if ($request->hasFile('image')) {
                // Remove the old image if it exists
                $oldImage = $blog->image;
                if ($oldImage) {
                    @unlink(public_path($oldImage));
                }

                // Save the new image
                $image = $request->file('image');
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                $image->move('upload/blog/', $name_gen);
                $save_url = 'upload/blog/' . $name_gen;

                // Update the blog with the new image
                $blog->update([
                    'image' => $save_url,
                ]);
            }

            // Update the blog with other fields
            $blog->update([
                'small_title' => $request->small_title,
                'title' => $request->title,
                'created_date' => $request->created_date,
                'alt_image' => $request->alt_image,
                'long_description' => $request->full_editor_data,
                'status' => 1,
                'updated_at' => Carbon::now('Asia/Dubai'),
            ]);

            DB::commit();

            $notification = [
                'message' => 'Blog Updated Successfully',
                'alert-type' => 'info'
            ];

            return redirect()->route('view_admin_blogs')->with($notification);
        } catch (\Exception $e) {
            DB::rollback();

            $notification = [
                'message' => 'Something Went Wrong',
                'alert-type' => 'error'
            ];

            return redirect()->back()->with($notification);
        }
    }





    public function ActiveBlogs($id)
    {
        Blog::where('id', $id)->update([
            'status' => 1,
        ]);

        $notification = [
            'message' => 'Blog Activeted Updated Successfully',
            'alert-type' => 'info'
        ];

        return redirect()->route('view_admin_blogs')->with($notification);
    }

    public function UnActiveBlogs($id)
    {

        Blog::where('id', $id)->update([
            'status' => 0,
        ]);

        $notification = [
            'message' => 'Blog An Activeted Successfully',
            'alert-type' => 'info'
        ];

        return redirect()->route('view_admin_blogs')->with($notification);
    }
}
