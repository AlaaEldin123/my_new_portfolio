<?php

use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\FeaturesController;
use App\Http\Controllers\Backend\MyPortfolioController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('testfront');
});

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
});

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return redirect(url('/'));
});






require __DIR__ . '/auth.php';
