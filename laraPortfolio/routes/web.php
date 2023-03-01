<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\aboutController;
use App\Http\Controllers\admin\skillsController;
use App\Http\Controllers\public\publicController;
use App\Http\Controllers\admin\settingsController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\educationController;

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Admin Routes
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('admin.dashboard');

    // Settings Control
    Route::get('/logo-fav', [settingsController::class, 'logo_fav'])->name('admin.logo-fav');
    Route::post('/logo', [settingsController::class, 'logo_update'])->name('admin.logo-update');
    Route::post('/logo-fav', [settingsController::class, 'fav_update'])->name('admin.fav-update');

    // About Settings
    Route::get('/about/view-about', [aboutController::class, 'viewabout'])->name('admin.view-about');
    Route::post('/about/view-about', [aboutController::class,'updateImage'])->name('admin.about.update-image');
    Route::get('about/edit-about', [aboutController::class, 'editabout'])->name('admin.edit-about');
    Route::post('about/edit-about', [aboutController::class, 'editaboutSubmit'])->name('admin.edit-about');

    // Skills
    Route::get('/skills/view-skills', [skillsController::class, 'viewSkills'])->name('admin.view-skills');
    Route::post('/skills/view-skills', [skillsController::class, 'createSkillsSubmit'])->name('admin.create-skills');
    Route::get('/skills/edit-skills/{skill_id}', [skillsController::class, 'editSkills'])->name('admin.edit-skills');
    Route::post('/skills/edit-skills/{skill_id}', [skillsController::class, 'editSkillsSubmit'])->name('admin.edit-skills');
    Route::get('/skills/delete-skills/{skill_id}', [skillsController::class, 'deleteSkills'])->name('admin.delete-skills');

    // Education
    Route::get('/education/create-edu', [educationController::class, 'createEdu'])->name('admin.create-edu');
    Route::post('/education/create-edu', [educationController::class, 'createEduSubmit'])->name('admin.create-edu');
    Route::get('/education/edit-edu/{edu_id}', [educationController::class, 'editEdu'])->name('admin.edit-edu');
    Route::post('/education/edit-edu/{edu_id}', [educationController::class, 'editEduSubmit'])->name('admin.edit-edu');
    Route::get('/education/delete-edu/{edu_id}', [educationController::class, 'deleteEdu'])->name('admin.delete-edu');
});

//Public Routes
Route::get('/', [publicController::class, 'index'])->name('public.index');
