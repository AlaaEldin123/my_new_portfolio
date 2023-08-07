<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\BannerSkillsIcon;
use App\Models\FeaturesCard;
use App\Models\SocialMedia;
use App\Models\WebSiteSetting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index()
    {
        $banner = Banner::where('id', 1)->first();
        $social_icon = SocialMedia::latest()->get();
        $BannerSkillsIcon = BannerSkillsIcon::latest()->get();
        $WebSiteSetting = WebSiteSetting::where('id',1)->first();
        $FeaturesCard = FeaturesCard::latest()->first();
        return view('frontend', compact('banner','social_icon','BannerSkillsIcon','WebSiteSetting','FeaturesCard'));
    } // END METHOD
}
