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
    Route::get('/skills/icon/banner/view', [BannerController::class, 'SkillsIconeBannerView'])->name('admin.banner.skills.icon.view');
    Route::get('/add/skills/icon/banner', [BannerController::class, 'AddSkillsIconBanner'])->name('add_skills_banner_icon');
    Route::post('/insert/skills/icon/banner', [BannerController::class, 'InsertSkillsIconBanner'])->name('banner_skills_icon_insert');
    Route::get('/delete/skills/icon/banner/{id}', [BannerController::class, 'DeleteSkillsIconBanner'])->name('delete_skills_banner_icon');


});

require __DIR__ . '/auth.php';
