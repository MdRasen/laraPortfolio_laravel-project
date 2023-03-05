<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\aboutController;
use App\Http\Controllers\admin\skillsController;
use App\Http\Controllers\admin\serviceController;
use App\Http\Controllers\public\publicController;
use App\Http\Controllers\admin\settingsController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\educationController;
use App\Http\Controllers\admin\portfolioController;
use App\Http\Controllers\admin\experienceController;

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

    // Experience
    Route::get('/experience/create-exp', [experienceController::class, 'createExp'])->name('admin.create-exp');
    Route::post('/experience/create-exp', [experienceController::class, 'createExpSubmit'])->name('admin.create-exp');
    Route::get('/experience/edit-exp/{exp_id}', [experienceController::class, 'editExp'])->name('admin.edit-exp');
    Route::post('/experience/edit-exp/{exp_id}', [experienceController::class, 'editExpSubmit'])->name('admin.edit-exp');
    Route::get('/experience/delete-exp/{exp_id}', [experienceController::class, 'deleteExp'])->name('admin.delete-exp');

    // Service
    Route::get('/service/create-service', [serviceController::class, 'createService'])->name('admin.create-service');
    Route::post('/service/create-service', [serviceController::class, 'createServiceSubmit'])->name('admin.create-service');
    Route::get('/service/edit-service/{ser_id}', [serviceController::class, 'editService'])->name('admin.edit-service');
    Route::post('/service/edit-service/{ser_id}', [serviceController::class, 'editServiceSubmit'])->name('admin.edit-service');
    Route::get('/service/delete-exp/{ser_id}', [serviceController::class, 'deleteService'])->name('admin.delete-service');

    // Portfolio
    Route::get('/portfolio/create-portfolio', [portfolioController::class, 'createPortfolio'])->name('admin.create-portfolio');
    Route::post('/portfolio/create-portfolio', [portfolioController::class, 'createPortfolioSubmit'])->name('admin.create-portfolio');
    // Route::get('/service/edit-service/{ser_id}', [serviceController::class, 'editService'])->name('admin.edit-service');
    // Route::post('/service/edit-service/{ser_id}', [serviceController::class, 'editServiceSubmit'])->name('admin.edit-service');
    // Route::get('/service/delete-exp/{ser_id}', [serviceController::class, 'deleteService'])->name('admin.delete-service');
});

//Public Routes
Route::get('/', [publicController::class, 'index'])->name('public.index');
