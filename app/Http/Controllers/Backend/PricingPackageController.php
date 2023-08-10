<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PricingPackage;
use App\Models\PricingPackageDetails;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PricingPackageController extends Controller
{
    public function ViewPricingPackage()
    {
        $PricingPackage = PricingPackage::latest()->get();

        return view('admin.pricing_package.pricing_package_view', compact('PricingPackage'));
    } // END METHOD

    public function AddPricingPackage()
    {

        return view('admin.pricing_package.pricing_package_add');
    } // END METHOD












    public function InsertPricingPackage(Request $request)
    {



        $request->validate([
            'package_header' => 'required',
            'package_title' => 'required',
            'package_subtitle' => 'required',
            'package_short_description' => 'required',
            'package_feature' => 'required',
            'days_delivery'=>'required',


        ]);


        DB::beginTransaction();

        try {

            $package_id =  PricingPackage::insertGetId([
                'package_header' => $request->package_header,
                'package_title' => $request->package_title,
                'package_subtitle' => $request->package_subtitle,
                'package_short_description' => $request->package_short_description,
                'status' => 1,
                'created_at' => Carbon::now('Asia/Dubai'),
                'package_price' => $request->package_price,
                'days_delivery' => $request->days_delivery,
            ]);
            dd($request->all());
            $count = count($request['package_feature']);

            for ($i = 0; $i < $count; $i++) {
                $packageFeature = $request->package_feature[$i];

                // Check if the value is not null before inserting into the database
                if ($packageFeature !== null) {
                    $insert =  PricingPackageDetails::insert([
                        'package_id' => $package_id,
                        'package_feature' => $packageFeature,
                        'created_at' => Carbon::now(),
                    ]);
                }
            }



            DB::commit();

            $notification = array(
                'message' => 'Package Inserted Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('view_admin_PricingPackage')->with($notification);
        } catch (\Exception $e) {
            DB::rollback();

            $notification = array(
                'message' => 'SomeThing Wrong Heppened',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }
    } // END METHOD





    public function DeletePricingPackage($id)
    {
        try {
            // Find the PricingPackage by ID

            // Check if the PricingPackage is associated with any PricingPackageDetails
            $check_package_id = PricingPackageDetails::findOrFail($id);


            // Start a database transaction
            DB::beginTransaction();

            // Delete the PricingPackage
            $check_package_id->delete();

            // Commit the transaction
            DB::commit();

            $notification = array(
                'message' => 'Pricing Package Deleted Successfully',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        } catch (\Exception $e) {
            // If there is an exception, rollback the transaction
            DB::rollBack();

            $notification = array(
                'message' => 'Failed to delete Pricing Package',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }


    public function EditPricingPackage($id)
    {
        $PricingPackage = PricingPackage::findOrFail($id)->first();

        return view('admin.pricing_package.pricing_package_edit', compact('PricingPackage'));
    } // END METHOD


    public function UpdatePricingPackage(Request $request)
    {
        $request->validate([
            'package_header' => 'required',
            'package_title' => 'required',
            'package_subtitle' => 'required',
            'package_short_description' => 'required',
            'package_price' => 'required',
            'days_delivery'=>'required',

        ]);

        DB::beginTransaction();

        try {
            $package_id =  PricingPackage::where('id', $request->id)->update([
                'package_header' => $request->package_header,

                'package_title' => $request->package_title,
                'package_subtitle' => $request->package_subtitle,
                'package_short_description' => $request->package_short_description,

                'updated_at' => Carbon::now('Asia/Dubai'),
                'package_price' => $request->package_price,
                'days_delivery'=>$request->days_delivery,
            ]);


            DB::commit(); // If everything goes well, commit the changes to the database.

            $notification = [
                'message' => 'Package Header Updated Successfully',
                'alert-type' => 'info'
            ];

            return redirect()->route('view_admin_PricingPackage')->with($notification);
        } catch (\Exception $e) {
            DB::rollback(); // If an error occurs, rollback the changes made during the transaction.

            $notification = [
                'message' => 'Something Went Wrong',
                'alert-type' => 'error'
            ];

            return redirect()->back()->with($notification);
        }
    }


    public function ActivePricingPackage($id)
    {
        PricingPackage::where('id', $id)->update([
            'status' => 1,
        ]);

        $notification = [
            'message' => 'Package Header Activeted Updated Successfully',
            'alert-type' => 'info'
        ];

        return redirect()->route('view_admin_PricingPackage')->with($notification);
    }

    public function UnActivePricingPackage($id)
    {

        PricingPackage::where('id', $id)->update([
            'status' => 0,
        ]);

        $notification = [
            'message' => 'Education Job Card An Activeted Successfully',
            'alert-type' => 'info'
        ];

        return redirect()->route('view_admin_PricingPackage')->with($notification);
    }





    ////////////////////////  pricing package details /////////////////////////////////


    public function ViewPricingPackageDetails()
    {
        $PricingPackageDetails = PricingPackageDetails::latest()->get();
        $PricingPackage = PricingPackage::latest()->get();
        return view('admin.pricing_package_details.pricing_package_details_view', compact('PricingPackageDetails', 'PricingPackage'));
    } // END METHOD

    public function AddPricingPackageDetails()
    {
        $PricingPackageDetails = PricingPackageDetails::latest()->get();
        $PricingPackage = PricingPackage::latest()->get();

        return view('admin.pricing_package_details.pricing_package_details_add', compact('PricingPackage', 'PricingPackageDetails'));
    } // END METHOD


    public function InsertPricingPackageDetails(Request $request)
    {
        $request->validate([
            'package_id' => 'required',
            'package_feature' => 'required',
        ]);


        DB::beginTransaction();

        try {


            // Check if the value is not null before inserting into the database

            $insert =  PricingPackageDetails::insert([
                'package_id' => $request->package_id,
                'package_feature' => $request->package_feature,
                'created_at' => Carbon::now(),
            ]);



            DB::commit();

            $notification = array(
                'message' => 'Package Header Inserted Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('view_admin_PricingPackageDetails')->with($notification);
        } catch (\Exception $e) {
            DB::rollback();

            $notification = array(
                'message' => 'SomeThing Wrong Heppened',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }
    } // END METHOD


    public function DeletePricingPackageDetails($id)
    {
        try {
            // Find the PricingPackage by ID
            $PricingPackage = PricingPackage::findOrFail($id);

            // Check if the PricingPackage is associated with any PricingPackageDetails
            $check_package_id = PricingPackageDetails::where('package_id', $id)->first();
            if ($check_package_id !== null) {
                $notification = array(
                    'message' => 'Sorry, this package is used by Package Details',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            }

            // Start a database transaction
            DB::beginTransaction();

            // Delete the PricingPackage
            $PricingPackage->delete();

            // Commit the transaction
            DB::commit();

            $notification = array(
                'message' => 'Pricing Package Deleted Successfully',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        } catch (\Exception $e) {
            // If there is an exception, rollback the transaction
            DB::rollBack();

            $notification = array(
                'message' => 'Failed to delete Pricing Package',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }


    public function EditPricingPackageDetails($id)
    {
        $PricingPackage = PricingPackage::latest()->get();
        $PricingPackageDetails = PricingPackageDetails::findOrFail($id)->first();
        return view('admin.pricing_package_details.pricing_package_details_edit', compact('PricingPackageDetails', 'PricingPackage'));
    } // END METHOD


    public function UpdatePricingPackageDetails(Request $request)
    {

        $request->validate([
            'package_feature' => 'required',
            'package_id' => 'required',

        ]);

        DB::beginTransaction();

        try {
            PricingPackageDetails::where('id', $request->id)->update([
                'package_feature' => $request->package_feature,
                'package_id' => $request->package_id,

                'updated_at' => Carbon::now('Asia/Dubai'),
            ]);

            DB::commit(); // If everything goes well, commit the changes to the database.

            $notification = [
                'message' => 'Package Feature Updated Successfully',
                'alert-type' => 'info'
            ];

            return redirect()->route('view_admin_PricingPackageDetails')->with($notification);
        } catch (\Exception $e) {
            DB::rollback(); // If an error occurs, rollback the changes made during the transaction.

            $notification = [
                'message' => 'Something Went Wrong',
                'alert-type' => 'error'
            ];

            return redirect()->back()->with($notification);
        }
    }
}
