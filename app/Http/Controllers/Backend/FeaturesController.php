<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FeaturesCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Auth;
use Carbon\Carbon;

class FeaturesController extends Controller
{



    public function FeatureCardView()
    {
        $banner_icons = FeaturesCard::latest()->get();
        return view('admin.features_card.features_card_view', compact('banner_icons'));
    } // END METHOD


    public function AddFeatureCard()
    {

        return view('admin.features_card.features_card_add');
    } // END METHOD



    public function InsertFeatureCard(Request $request)
    {


        $request->validate([
            'image' => 'required|string',
            'alt_image' => 'required|string',
            'link' => 'required|string',
            'title' => 'required|string',
            'short_description' => 'required',
        ]);

        DB::beginTransaction();

        try {



            FeaturesCard::insert([
                'image' => $request->image,
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




    public function DeleteFeatureCard($id)
    {

        try {
            $bannerSkillsIcon = FeaturesCard::findOrFail($id);
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


    public function EditFeatureCard($id)
    {
        $banner_ikons = FeaturesCard::where('id',$id)->first();
        return view('admin.features_card.features_card_edit', compact('banner_ikons'));
    } // END METHOD


    public function UpdateFeatureCard(Request $request)
    {
        $request->validate([
            'alt_image' => 'required',
            'link' => 'required',
            'title' => 'required',
            'short_description' => 'required',
        ]);

        DB::beginTransaction();

        try {
            $featureCard = FeaturesCard::findOrFail($request->id);

            if ($request->hasFile('image')) {
                $oldImage = $featureCard->image;
                @unlink($oldImage);

                $image = $request->file('image');
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                $image->move('upload/feature_card/', $name_gen);
                $save_url = 'upload/feature_card/' . $name_gen;

                $featureCard->image = $save_url;
            }

            $featureCard->alt_image = $request->alt_image;
            $featureCard->link = $request->link;
            $featureCard->title = $request->title;
            $featureCard->short_description = $request->short_description;
            $featureCard->updated_at = Carbon::now();
            $featureCard->save();

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
