<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MyPortfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;



class MyPortfolioController extends Controller
{
    public function MyPortfolioView()
    {
        $my_portfolio = MyPortfolio::latest()->get();
        return view('admin.my_portfolio.my_portfolio_view', compact('my_portfolio'));
    } // END METHOD


    public function AddMyPortfolio()
    {

        return view('admin.my_portfolio.my_portfolio_add');
    } // END METHOD

    public function InsertMyPortfolio(Request $request)
    {

        // Validate the incoming form data
        $request->validate([
            'view_title' => 'required|string',
            'inside_title' => 'required|string',
            'short_description' => 'required|string',
            'small_inside_title' => 'required|string',
            'view_alt_image' => 'required|string',
            'inside_alt_image' => 'required|string',
            'view_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'inside_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required|string',
            'visibility' => 'required|integer',
            'full_editor_data' => 'required',

        ]);

        // Handle file uploads

        $image = $request->file('view_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save('upload/feature_card/' . $name_gen);
        $viewImagePath = 'upload/feature_card/' . $name_gen;

        $ins_image = $request->file('inside_image');
        $ins_name_gen = hexdec(uniqid()) . '.' . $ins_image->getClientOriginalExtension();
        Image::make($ins_image)->save('upload/feature_card/' . $ins_name_gen);
        $insideImagePath = 'upload/feature_card/' . $ins_name_gen;



        // Create a new MyPortfolio instance and populate it with the form data

        $portfolio = MyPortfolio::insert([
            'view_title' => $request->view_title,
            'inside_title' => $request->inside_title,
            'short_description' => $request->short_description,
            'small_inside_title' => $request->small_inside_title,
            'view_alt_image' => $request->view_alt_image,
            'inside_alt_image' => $request->inside_alt_image,
            'view_image' => $viewImagePath,
            'inside_image' => $insideImagePath,
            'link' => $request->link,
            'visibility' => $request->visibility,
            'long_description' => $request->full_editor_data,

        ]);

        $notification = array(
            'message' => 'Features Card Created Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('admin_my_portfolio_view')->with($notification);
    }


    public function DeleteMyPortfolio($id)
    {

        try {
            $bannerSkillsIcon = MyPortfolio::findOrFail($id);
            @unlink($bannerSkillsIcon->view_image);
            @unlink($bannerSkillsIcon->inside_image);

            $bannerSkillsIcon->delete();
            $notification = array(
                'message' => 'Protfolio Card Deleted Successfully',
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


    public function EditMyPortfolio($id)
    {
        $my_portfolio = MyPortfolio::findOrFail($id)->first();
        return view('admin.my_portfolio.my_portfolio_edit', compact('my_portfolio'));
    } // END METHOD


    public function UpdateMyPortfolio(Request $request)
    {
        if (
            $request->view_image
        ) {
            $request->validate([
                'view_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

            ]);
        }
        if (
            $request->inside_image
        ) {
            $request->validate([

                'inside_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
        }
        $request->validate([
            'view_title' => 'required|string',
            'inside_title' => 'required|string',
            'short_description' => 'required|string',
            'small_inside_title' => 'required|string',
            'view_alt_image' => 'required|string',
            'inside_alt_image' => 'required|string',
            'link' => 'required|string',
            'visibility' => 'required|integer',
            'full_editor_data' => 'required',

        ]);





        DB::beginTransaction();

        try {

            $MyPortfolio = MyPortfolio::findOrFail($request->id);
            if ($request->hasFile('view_image')) {
                $oldImage = $MyPortfolio->view_image;
                @unlink($oldImage);

                $image = $request->file('view_image');
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                $image->move('upload/my_portfolio/', $name_gen);
                $save_url = 'upload/my_portfolio/' . $name_gen;

                $MyPortfolio->view_image = $save_url;
            }

            if ($request->hasFile('inside_image')) {
                $oldImage = $MyPortfolio->inside_image;
                @unlink($oldImage);

                $inside_images = $request->file('inside_image');
                $name_gene = hexdec(uniqid()) . '.' . $inside_images->getClientOriginalExtension();
                $inside_images->move('upload/my_portfolio/', $name_gene);
                $inside_images_save_url = 'upload/my_portfolio/' . $name_gene;

                $MyPortfolio->inside_image = $inside_images_save_url;
            }

            $MyPortfolio->view_title = $request['view_title'];
            $MyPortfolio->inside_title = $request['inside_title'];
            $MyPortfolio->short_description = $request['short_description'];
            $MyPortfolio->small_inside_title = $request['small_inside_title'];
            $MyPortfolio->view_alt_image = $request['view_alt_image'];
            $MyPortfolio->inside_alt_image = $request['inside_alt_image'];
            // $MyPortfolio->view_image = $viewImagePath;
            // $MyPortfolio->inside_image = $insideImagePath;
            $MyPortfolio->link = $request['link'];
            $MyPortfolio->visibility = $request['visibility'];
            $MyPortfolio->long_description = $request['full_editor_data'];
            $MyPortfolio->updated_at = Carbon::now();
            //dd($MyPortfolio);
            $MyPortfolio->save();

            DB::commit();

            $notification = array(
                'message' => 'Features Card Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('admin_my_portfolio_view')->with($notification);
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
