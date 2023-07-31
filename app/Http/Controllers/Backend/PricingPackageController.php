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

        ]);


        DB::beginTransaction();

        try {

            PricingPackage::insert([
                'package_header' => $request->package_header,

                'status' => 1,

                'created_at' => Carbon::now('Asia/Dubai'),

            ]);

            DB::commit();

            $notification = array(
                'message' => 'Package Header Inserted Successfully',
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


    public function EditPricingPackage($id)
    {
        $PricingPackage = PricingPackage::findOrFail($id)->first();
        return view('admin.pricing_package.pricing_package_edit', compact('PricingPackage'));
    } // END METHOD


    public function UpdatePricingPackage(Request $request)
    {
        $request->validate([
            'package_header' => 'required',

        ]);

        DB::beginTransaction();

        try {
            PricingPackage::where('id', $request->id)->update([
                'package_header' => $request->package_header,
                'status' => 1,
                'updated_at' => Carbon::now('Asia/Dubai'),
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
}
