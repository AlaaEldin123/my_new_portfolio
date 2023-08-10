<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\BannerSkillsIcon;
use App\Models\FeaturesCard;
use App\Models\MyPortfolio;
use App\Models\MyResumeEducationJob;
use App\Models\MyResumeprofessionalSkills;
use App\Models\PricingPackage;
use App\Models\PricingPackageDetails;
use App\Models\SocialMedia;
use App\Models\Testimonial;
use App\Models\WebSiteSetting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index()
    {
        $banner = Banner::where('id', 1)->first();
        $social_icon = SocialMedia::latest()->get();
        $BannerSkillsIcon = BannerSkillsIcon::latest()->get();
        $WebSiteSetting = WebSiteSetting::where('id', 1)->first();
        $FeaturesCard = FeaturesCard::latest()->get();
        $MyPortfolio = MyPortfolio::latest()->get();
        $MyResumeEducationJob = MyResumeEducationJob::where('status', 1)->where('type', "Education Quality")->latest()->get();
        $MyResumeprofessionalSkills = MyResumeEducationJob::where('status', 1)->where('type', "Job Experience")->latest()->get();
        $Testimonial = Testimonial::where('status', 1)->where('status', 1)->latest()->get();
        $PricingPackageDetails = PricingPackageDetails::where('status', 1)->where('status', 1)->latest()->get();
        $PricingPackage = PricingPackage::where('status', 1)->where('status', 1)->latest()->get();

        $MyResumeprofessionalSkillsDesignSkill = MyResumeprofessionalSkills::where('status', 1)->where('type', "Design Skill")->latest()->get();




        $MyResumeprofessionalSkillsDevelopmentSkill = MyResumeprofessionalSkills::where('status', 1)->where('type', "Development Skill")->latest()->get();



        return view('frontend', compact('banner', 'social_icon', 'BannerSkillsIcon', 'WebSiteSetting', 'FeaturesCard', 'MyPortfolio', 'MyResumeEducationJob', 'MyResumeprofessionalSkills', 'Testimonial', 'PricingPackage', 'MyResumeprofessionalSkillsDesignSkill', 'MyResumeprofessionalSkillsDevelopmentSkill'));
    } // END METHOD
}
