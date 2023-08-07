<?php

use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\FeaturesController;
use App\Http\Controllers\Backend\MyPortfolioController;
use App\Http\Controllers\Backend\MyResumeController;
use App\Http\Controllers\Backend\PricingPackageController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\WebSiteSettingController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\ProfileController;
use App\Models\WebSiteSetting;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'Index']);


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    ////////////////////////////////////////////// Banner Routes /////////////////////////////////

    Route::get('/banner/update', [BannerController::class, 'ViewUpdateBanner'])->name('admin.banner.view');
    Route::post('/banner/update', [BannerController::class, 'UpdateBanner'])->name('banner.update');

    ///////////////// Banner Skills Icone /////////////////////
    Route::get('/banner/skills/icon/view', [BannerController::class, 'SkillsIconeBannerView'])->name('admin.banner.skills.icon.view');
    Route::get('/banner/skills/icon/add', [BannerController::class, 'AddSkillsIconBanner'])->name('add_skills_banner_icon');
    Route::post('/banner/skills/icon/insert', [BannerController::class, 'InsertSkillsIconBanner'])->name('banner_skills_icon_insert');
    Route::get('/banner/skills/icon/delete/{id}', [BannerController::class, 'DeleteSkillsIconBanner'])->name('delete_skills_banner_icon');
    Route::get('/banner/skills/icon/edit/{id}', [BannerController::class, 'EditSkillsIconBanner'])->name('edit_skills_banner_icon');
    Route::post('/banner/skills/icon/update', [BannerController::class, 'UpdateSkillsIconBanner'])->name('banner_skills_icon_update');



    // /////////////////// Banner Social Media Icon ///////////////////////

    Route::get('/banner/social/icon/view', [BannerController::class, 'SocialMediaIconeBannerView'])->name('admin.banner.social.media.icon.view');
    Route::get('/banner/social/icon/add', [BannerController::class, 'AddSocialMediaIconBanner'])->name('add_social_media_banner_icon');
    Route::post('/banner/social/icon/insert', [BannerController::class, 'InsertSocialMediaIconBanner'])->name('banner_social_media_icon_insert');
    Route::get('/banner/social/icon/delete/{id}', [BannerController::class, 'DeleteSocialMediaIconBanner'])->name('delete_social_media_banner_icon');
    Route::get('/banner/social/icon/edit/{id}', [BannerController::class, 'EditSocialMediaIconBanner'])->name('edit_social_media_banner_icon');
    Route::post('/banner/social/icon/update', [BannerController::class, 'UpdateSocialMediaIconBanner'])->name('banner_social_media_icon_update');








    ///////////////////// Feature  ///////////////////////

    Route::get('/feature/card/view', [FeaturesController::class, 'FeatureCardView'])->name('admin_feature_card_view');
    Route::get('/feature/card/add', [FeaturesController::class, 'AddFeatureCard'])->name('add_feature_card');
    Route::post('/feature/card/insert', [FeaturesController::class, 'InsertFeatureCard'])->name('feature_card_insert');
    Route::get('/feature/card/delete/{id}', [FeaturesController::class, 'DeleteFeatureCard'])->name('delete_feature_card');
    Route::get('/feature/card/edit/{id}', [FeaturesController::class, 'EditFeatureCard'])->name('edit_feature_card');
    Route::post('/feature/card/update', [FeaturesController::class, 'UpdateFeatureCard'])->name('feature_card_update');



    ///////////////////// My Portfolio Card ///////////////////////

    Route::get('/portfolio/card/view', [MyPortfolioController::class, 'MyPortfolioView'])->name('admin_my_portfolio_view');
    Route::get('/portfolio/card/add', [MyPortfolioController::class, 'AddMyPortfolio'])->name('add_my_portfolio');
    Route::post('/portfolio/card/insert', [MyPortfolioController::class, 'InsertMyPortfolio'])->name('my_portfolio_insert');
    Route::get('/portfolio/card/delete/{id}', [MyPortfolioController::class, 'DeleteMyPortfolio'])->name('delete_my_portfolio');
    Route::get('/portfolio/card/edit/{id}', [MyPortfolioController::class, 'EditMyPortfolio'])->name('edit_my_portfolio');
    Route::post('/portfolio/card/update', [MyPortfolioController::class, 'UpdateMyPortfolio'])->name('my_portfolio_update');




    ///////////////////// My Resume  ///////////////////////

    /////// Education Job ///////
    Route::get('/resume/educ/job/view', [MyResumeController::class, 'ViewResumeEducationJob'])->name('admin_my_resume_education_job_view');
    Route::get('/resume/educ/job/add', [MyResumeController::class, 'AddResumeEducationJob'])->name('add_my_resume_education_job');
    Route::post('/resume/educ/job/insert', [MyResumeController::class, 'InsertResumeEducationJob'])->name('insert_my_resume_education_job');
    Route::get('/resume/educ/job/delete/{id}', [MyResumeController::class, 'DeleteResumeEducationJob'])->name('delete_my_resume_education_job');
    Route::get('/resume/educ/job/edit/{id}', [MyResumeController::class, 'EditResumeEducationJob'])->name('edit_my_resume_education_job');
    Route::post('/resume/educ/job/update', [MyResumeController::class, 'UpdateResumeEducationJob'])->name('update_my_resume_education_job');
    Route::get('/resume/educ/job/active/{id}', [MyResumeController::class, 'ActiveResumeEducationJob'])->name('active_my_resume_education_job');
    Route::get('/resume/educ/job/unactive/{id}', [MyResumeController::class, 'UnActiveResumeEducationJob'])->name('unactive_my_resume_education_job');


    /////// ProfessionalSkills ///////

    Route::get('/resume/professional/skill/view', [MyResumeController::class, 'ViewResumeProfessionalSkills'])->name('admin_my_resume_professional_skills_view');
    Route::get('/resume/professional/skill/add', [MyResumeController::class, 'AddResumeProfessionalSkills'])->name('add_my_resume_professional_skills');
    Route::post('/resume/professional/skill/insert', [MyResumeController::class, 'InsertResumeProfessionalSkills'])->name('insert_my_resume_professional_skills');
    Route::get('/resume/professional/skill/delete/{id}', [MyResumeController::class, 'DeleteResumeProfessionalSkills'])->name('delete_my_resume_professional_skills');
    Route::get('/resume/professional/skill/edit/{id}', [MyResumeController::class, 'EditResumeProfessionalSkills'])->name('edit_my_resume_professional_skills');
    Route::post('/resume/professional/skill/update', [MyResumeController::class, 'UpdateResumeProfessionalSkills'])->name('update_my_resume_professional_skills');
    Route::get('/resume/professional/skill/active/{id}', [MyResumeController::class, 'ActiveResumeProfessionalSkills'])->name('active_my_resume_professional_skills');
    Route::get('/resume/professional/skill/unactive/{id}', [MyResumeController::class, 'UnActiveResumeProfessionalSkills'])->name('unactive_my_resume_professional_skills');



    /////// ProfessionalSkills ///////

    Route::get('/resume/professional/skill/view', [MyResumeController::class, 'ViewResumeProfessionalSkills'])->name('admin_my_resume_professional_skills_view');
    Route::get('/resume/professional/skill/add', [MyResumeController::class, 'AddResumeProfessionalSkills'])->name('add_my_resume_professional_skills');
    Route::post('/resume/professional/skill/insert', [MyResumeController::class, 'InsertResumeProfessionalSkills'])->name('insert_my_resume_professional_skills');
    Route::get('/resume/professional/skill/delete/{id}', [MyResumeController::class, 'DeleteResumeProfessionalSkills'])->name('delete_my_resume_professional_skills');
    Route::get('/resume/professional/skill/edit/{id}', [MyResumeController::class, 'EditResumeProfessionalSkills'])->name('edit_my_resume_professional_skills');
    Route::post('/resume/professional/skill/update', [MyResumeController::class, 'UpdateResumeProfessionalSkills'])->name('update_my_resume_professional_skills');
    Route::get('/resume/professional/skill/active/{id}', [MyResumeController::class, 'ActiveResumeProfessionalSkills'])->name('active_my_resume_professional_skills');
    Route::get('/resume/professional/skill/unactive/{id}', [MyResumeController::class, 'UnActiveResumeProfessionalSkills'])->name('unactive_my_resume_professional_skills');




    /////\\\\\\\\\\\// Testimonial \\\\\\\\\\\\\\\///////

    Route::get('/resume/testimonia/view', [TestimonialController::class, 'ViewTestimonial'])->name('admin_testimonial_view');
    Route::get('/resume/testimonia/add', [TestimonialController::class, 'AddTestimonial'])->name('add_testimonia');
    Route::post('/resume/testimonia/insert', [TestimonialController::class, 'InsertTestimonial'])->name('insert_testimonia');
    Route::get('/resume/testimonia/delete/{id}', [TestimonialController::class, 'DeleteTestimonial'])->name('delete_testimonia');
    Route::get('/resume/testimonia/edit/{id}', [TestimonialController::class, 'EditTestimonial'])->name('edit_testimonia');
    Route::post('/resume/testimonia/update', [TestimonialController::class, 'UpdateTestimonial'])->name('update_testimonia');
    Route::get('/resume/testimonia/active/{id}', [TestimonialController::class, 'ActiveTestimonial'])->name('active_testimonia');
    Route::get('/resume/testimonia/unactive/{id}', [TestimonialController::class, 'UnActiveTestimonial'])->name('unactive_testimonia');



    /////\\\\\\\\\\\// package price \\\\\\\\\\\\\\\///////

    Route::get('/package/price/view', [PricingPackageController::class, 'ViewPricingPackage'])->name('view_admin_PricingPackage');
    Route::get('/package/price/add', [PricingPackageController::class, 'AddPricingPackage'])->name('add_PricingPackage');
    Route::post('/package/price/insert', [PricingPackageController::class, 'InsertPricingPackage'])->name('insert_PricingPackage');
    Route::get('/package/price/delete/{id}', [PricingPackageController::class, 'DeletePricingPackage'])->name('delete_PricingPackage');
    Route::get('/package/price/edit/{id}', [PricingPackageController::class, 'EditPricingPackage'])->name('edit_PricingPackage');
    Route::post('/package/price/update', [PricingPackageController::class, 'UpdatePricingPackage'])->name('update_PricingPackage');
    Route::get('/package/price/active/{id}', [PricingPackageController::class, 'ActivePricingPackage'])->name('active_PricingPackage');
    Route::get('/package/price/unactive/{id}', [PricingPackageController::class, 'UnActivePricingPackage'])->name('unactive_PricingPackage');






    /////\\\\\\\\\\\// package price Details \\\\\\\\\\\\\\\///////

    Route::get('/package/price/details/view', [PricingPackageController::class, 'ViewPricingPackageDetails'])->name('view_admin_PricingPackageDetails');
    Route::get('/package/price/details/add', [PricingPackageController::class, 'AddPricingPackageDetails'])->name('add_PricingPackageDetails');
    Route::post('/package/price/details/insert', [PricingPackageController::class, 'InsertPricingPackageDetails'])->name('insert_PricingPackageDetails');
    Route::get('/package/price/details/delete/{id}', [PricingPackageController::class, 'DeletePricingPackageDetails'])->name('delete_PricingPackageDetails');
    Route::get('/package/price/details/edit/{id}', [PricingPackageController::class, 'EditPricingPackageDetails'])->name('edit_PricingPackageDetails');
    Route::post('/package/price/details/update', [PricingPackageController::class, 'UpdatePricingPackageDetails'])->name('update_PricingPackageDetails');
    Route::get('/package/price/details/active/{id}', [PricingPackageController::class, 'ActivePricingPackageDetails'])->name('active_PricingPackageDetails');
    Route::get('/package/price/details/unactive/{id}', [PricingPackageController::class, 'UnActivePricingPackageDetails'])->name('unactive_PricingPackageDetails');





    /////\\\\\\\\\\\// Blogs \\\\\\\\\\\\\\\///////

    Route::get('/blogs/view', [BlogController::class, 'ViewBlogs'])->name('view_admin_blogs');
    Route::get('/blogs/add', [BlogController::class, 'AddBlogs'])->name('add_blogs');
    Route::post('/blogs/insert', [BlogController::class, 'InsertBlogs'])->name('insert_blogs');
    Route::get('/blogs/delete/{id}', [BlogController::class, 'DeleteBlogs'])->name('delete_blogs');
    Route::get('/blogs/edit/{id}', [BlogController::class, 'EditBlogs'])->name('edit_blogs');
    Route::post('/blogs/update', [BlogController::class, 'UpdateBlogs'])->name('update_blogs');
    Route::get('/blogs/active/{id}', [BlogController::class, 'ActiveBlogs'])->name('active_blogs');
    Route::get('/blogs/unactive/{id}', [BlogController::class, 'UnActiveBlogs'])->name('unactive_blogs');




    ////////////////////////////////////////////// Contact With Me Routes /////////////////////////////////

    Route::get('/contact/update', [ContactController::class, 'ViewUpdateContactWithMe'])->name('admin_ContactWithMe_view');
    Route::post('/contact/update', [ContactController::class, 'UpdateContactWithMe'])->name('ContactWithMe_update');



    /////\\\\\\\\\\\//  Contact With Me Form Routes   \\\\\\\\\\\\\\\///////

    Route::get('/contact/form/view', [ContactController::class, 'ViewContactMessageForm'])->name('admin_ContactWithMeForm_view');

    Route::get('/contact/form/delete/{id}', [ContactController::class, 'DeleteContactMessageForm'])->name('delete_ContactWithMeForm');


   /////\\\\\\\\\\\//  WebSite Setting Routes   \\\\\\\\\\\\\\\///////

   Route::get('/website/setting/edit', [WebSiteSettingController::class, 'EditWebSiteSetting'])->name('admin_WebSetting_view');
   Route::post('/website/setting/update', [WebSiteSettingController::class, 'UpdateWebSiteSetting'])->name('admin_WebSetting_update');












});

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return redirect(url('/'));
});



////////////////////////////////////////////// Contact With Me Form Routes /////////////////////////////////

Route::post('/contact/with/me/form', [ContactController::class, 'ContactWithMeFormInsert'])->name('contact_with_me_form');







require __DIR__ . '/auth.php';
