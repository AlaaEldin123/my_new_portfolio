<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\BannerSkillsIcon;
use App\Models\FeaturesCard;
use App\Models\MyPortfolio;
use App\Models\MyResumeEducationJob;
use App\Models\MyResumeprofessionalSkills;
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
        $FeaturesCard = FeaturesCard::latest()->get();
        $MyPortfolio = MyPortfolio::latest()->get();
        $MyResumeEducationJob = MyResumeEducationJob::where('type',"Education Quality")->latest()->get();
        $MyResumeprofessionalSkills = MyResumeEducationJob::where('type', "Job Experience")->latest()->get();


        return view('frontend', compact('banner','social_icon','BannerSkillsIcon','WebSiteSetting','FeaturesCard','MyPortfolio','MyResumeEducationJob','MyResumeprofessionalSkills'));
    } // END METHOD
}
