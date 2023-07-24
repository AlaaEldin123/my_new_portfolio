<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MyPortfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;


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
        // // Validate the incoming form data
        // $request = $request->validate([
        //     'view_title' => 'required|string',
        //     'inside_title' => 'required|string',
        //     'short_description' => 'required|string',
        //     'small_inside_title' => 'required|string',
        //     'view_alt_image' => 'required|string',
        //     'inside_alt_image' => 'required|string',
        //     'view_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'inside_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'link' => 'required|string',
        //     'visibility' => 'required|integer',
        //     'full-editor-data' => 'required',

        // ]);

        // Handle file uploads
        $viewImagePath = $request->file('view_image')->store('public/portfolio');
        $insideImagePath = $request->file('inside_image')->store('public/portfolio');

        // Create a new MyPortfolio instance and populate it with the form data
        $portfolio = new MyPortfolio();
        $portfolio->view_title = $request['view_title'];
        $portfolio->inside_title = $request['inside_title'];
        $portfolio->short_description = $request['short_description'];
        $portfolio->small_inside_title = $request['small_inside_title'];
        $portfolio->view_alt_image = $request['view_alt_image'];
        $portfolio->inside_alt_image = $request['inside_alt_image'];
        $portfolio->view_image = $viewImagePath;
        $portfolio->inside_image = $insideImagePath;
        $portfolio->link = $request['link'];
        $portfolio->visibility = $request['visibility'];
        $portfolio->long_description = $request['full-editor-data'];

        // Save the portfolio data to the database
        $portfolio->save();

        // Redirect to a success page or do whatever you want after the insert
        return redirect()->back();
    }

    // public function InsertMyPortfolio(Request $request)
    // {

    //     dd($request->all());
    //     $request->validate([
    //         'view_title' => 'required',
    //         'inside_title'  => 'required',
    //         'short_description' => 'required',
    //         'long_description' => 'required',
    //         'view_image' => 'required|mimes:jpeg,png,jpg,gif',
    //         'view_alt_image' => 'required',
    //         'inside_image' => 'required|mimes:jpeg,png,jpg,gif',
    //         'inside_alt_image' => 'required',
    //         'link' => 'required',
    //         'visibility' => 'required',
    //         'small_inside_title' => 'required',
    //     ]);


    //     DB::beginTransaction();

    //     try {


    //         $image = $request->file('view_image');
    //         $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
    //         Image::make($image)->save('upload/my_portfolio/' . $name_gen);
    //         $save_url = 'upload/my_portfolio/' . $name_gen;



    //         $imagee = $request->file('inside_image');
    //         $name_gene = hexdec(uniqid()) . '.' . $imagee->getClientOriginalExtension();
    //         Image::make($image)->save('upload/my_portfolio/' . $name_gene);
    //         $save_urll = 'upload/my_portfolio/' . $name_gene;


    //         MyPortfolio::insert([
    //             'view_image' => $save_url,
    //             'view_alt_image' => $request->view_alt_image,
    //             'created_at' => Carbon::now(),
    //             'link' => $request->link,
    //             'inside_title' => $request->inside_title,
    //             'short_description' => $request->short_description,
    //             'view_title' => $request->view_title,
    //             'long_description' => $request->long_description,
    //             'inside_image' => $save_urll,
    //             'inside_alt_image' => $request->inside_alt_image,
    //             'visibility' => $request->visibility,
    //             'smaill_inside_title' => $request->smaill_inside_title,
    //             'visibility' => $request->visibility,
    //         ]);




    //         DB::commit();

    //         $notification = array(
    //             'message' => 'Feature Card Inserted Successfully',
    //             'alert-type' => 'success'
    //         );

    //         return redirect()->route('admin_my_portfolio_view')->with($notification);
    //     } catch (\Exception $e) {
    //         DB::rollback();

    //         $notification = array(
    //             'message' => 'SomeThing Wrong Heppened',
    //             'alert-type' => 'error'
    //         );

    //         return redirect()->back()->with($notification);
    //     }
    // } // END METHOD





    public function DeleteMyPortfolio($id)
    {

        try {
            $bannerSkillsIcon = MyPortfolio::findOrFail($id);
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


    public function EditMyPortfolio($id)
    {
        $banner_ikons = MyPortfolio::findOrFail($id)->first();
        return view('admin.my_portfolio.my_portfolio_edit', compact('banner_ikons'));
    } // END METHOD


    public function UpdateMyPortfolio(Request $request)
    {

        $request->validate([
            'view_title' => 'required',
            'inside_title'  => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'view_image' => 'required|mimes:jpeg,png,jpg,gif',
            'view_alt_image' => 'required',
            'inside_image' => 'required|mimes:jpeg,png,jpg,gif',
            'inside_alt_image' => 'required',
            'link' => 'required',
            'visibility' => 'required',
            'small_inside_title' => 'required',
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

                $image = $request->file('inside_images');
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                $image->move('upload/my_portfolio/', $name_gen);
                $save_url = 'upload/my_portfolio/' . $name_gen;

                $MyPortfolio->inside_image = $save_url;
            }

            $MyPortfolio->view_alt_image = $request->view_alt_image;
            $MyPortfolio->inside_title = $request->inside_title;
            $MyPortfolio->title = $request->title;
            $MyPortfolio->short_description = $request->short_description;
            $MyPortfolio->long_description = $request->long_description;
            $MyPortfolio->inside_image = $request->inside_image;
            $MyPortfolio->inside_alt_image = $request->inside_alt_image;
            $MyPortfolio->view_title = $request->view_title;
            $MyPortfolio->view_image = $request->view_image;
            $MyPortfolio->link = $request->link;
            $MyPortfolio->visibility = $request->visibility;
            $MyPortfolio->smaill_inside_title = $request->smaill_inside_title;
            $MyPortfolio->updated_at = Carbon::now();
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
