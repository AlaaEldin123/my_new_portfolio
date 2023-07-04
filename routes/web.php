<?php

use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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




});

require __DIR__ . '/auth.php';
