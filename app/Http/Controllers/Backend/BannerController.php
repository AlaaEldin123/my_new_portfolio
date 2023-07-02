<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
class BannerController extends Controller
{
    public function ViewUpdateBanner()
    {
        $banner = Banner::where('id', 1)->first();
        return view('admin.banner.banner_update', compact('banner'));
    } // END METHOD

    public function UpdateBanner(Request $request)
    {
    } // END METHOD

}
