<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\blogController;
use App\Http\Controllers\admin\aboutController;
use App\Http\Controllers\admin\skillsController;
use App\Http\Controllers\admin\contactController;
use App\Http\Controllers\admin\serviceController;
use App\Http\Controllers\public\publicController;
use App\Http\Controllers\admin\settingsController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\educationController;
use App\Http\Controllers\admin\portfolioController;
use App\Http\Controllers\admin\experienceController;
use App\Http\Controllers\admin\passwordController;

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

    // Password Control
    Route::controller(passwordController::class)->group(function () {
        Route::get('/change-password', 'changePassword')->name('admin.change-password');
        Route::post('/change-password', 'changePasswordSubmit')->name('admin.change-password');
    });

    // Settings Control
    Route::controller(settingsController::class)->group(function () {
        Route::get('/logo-fav', 'logo_fav')->name('admin.logo-fav');
        Route::post('/logo', 'logo_update')->name('admin.logo-update');
        Route::post('/logo-fav', 'fav_update')->name('admin.fav-update');
    });

    // About Settings
    Route::controller(aboutController::class)->group(function () {
        Route::get('/about/view-about', 'viewabout')->name('admin.view-about');
        Route::post('/about/view-about', 'updateImage')->name('admin.about.update-image');
        Route::get('about/edit-about', 'editabout')->name('admin.edit-about');
        Route::post('about/edit-about', 'editaboutSubmit')->name('admin.edit-about');
    });

    // Skills
    Route::controller(skillsController::class)->group(function () {
        Route::get('/skills/view-skills', 'viewSkills')->name('admin.view-skills');
        Route::post('/skills/view-skills', 'createSkillsSubmit')->name('admin.create-skills');
        Route::get('/skills/edit-skills/{skill_id}', 'editSkills')->name('admin.edit-skills');
        Route::post('/skills/edit-skills/{skill_id}', 'editSkillsSubmit')->name('admin.edit-skills');
        Route::get('/skills/delete-skills/{skill_id}', 'deleteSkills')->name('admin.delete-skills');
    });

    // Education
    Route::controller(educationController::class)->group(function () {
        Route::get('/education/create-edu', 'createEdu')->name('admin.create-edu');
        Route::post('/education/create-edu', 'createEduSubmit')->name('admin.create-edu');
        Route::get('/education/edit-edu/{edu_id}', 'editEdu')->name('admin.edit-edu');
        Route::post('/education/edit-edu/{edu_id}', 'editEduSubmit')->name('admin.edit-edu');
        Route::get('/education/delete-edu/{edu_id}', 'deleteEdu')->name('admin.delete-edu');
    });

    // Experience
    Route::controller(experienceController::class)->group(function () {
        Route::get('/experience/create-exp', 'createExp')->name('admin.create-exp');
        Route::post('/experience/create-exp', 'createExpSubmit')->name('admin.create-exp');
        Route::get('/experience/edit-exp/{exp_id}', 'editExp')->name('admin.edit-exp');
        Route::post('/experience/edit-exp/{exp_id}', 'editExpSubmit')->name('admin.edit-exp');
        Route::get('/experience/delete-exp/{exp_id}', 'deleteExp')->name('admin.delete-exp');
    });

    // Service
    Route::controller(serviceController::class)->group(function () {
        Route::get('/service/create-service', 'createService')->name('admin.create-service');
        Route::post('/service/create-service', 'createServiceSubmit')->name('admin.create-service');
        Route::get('/service/edit-service/{ser_id}', 'editService')->name('admin.edit-service');
        Route::post('/service/edit-service/{ser_id}', 'editServiceSubmit')->name('admin.edit-service');
        Route::get('/service/delete-exp/{ser_id}', 'deleteService')->name('admin.delete-service');
    });

    // Portfolio
    Route::controller(portfolioController::class)->group(function () {
        Route::get('/portfolio/create-portfolio', 'createPortfolio')->name('admin.create-portfolio');
        Route::post('/portfolio/create-portfolio', 'createPortfolioSubmit')->name('admin.create-portfolio');
        Route::get('/portfolio/edit-portfolio/{port_id}', 'editPortfolio')->name('admin.edit-portfolio');
        Route::post('/portfolio/edit-portfolio/{port_id}', 'editPortfolioSubmit')->name('admin.edit-portfolio');
        Route::get('/portfolio/delete-portfolio/{port_id}', 'deletePortfolio')->name('admin.delete-portfolio');
    });

    // Blog    
    Route::controller(blogController::class)->group(function () {
        Route::get('/blog/create-blog', 'createBlog')->name('admin.create-blog');
        Route::post('/blog/create-blog', 'createBlogSubmit')->name('admin.create-blog');
        Route::get('/blog/edit-blog/{blog_id}', 'editBlog')->name('admin.edit-blog');
        Route::post('/blog/edit-blog/{blog_id}', 'editBlogSubmit')->name('admin.edit-blog');
        Route::get('/blog/delete-blog/{blog_id}', 'deleteBlog')->name('admin.delete-blog');
    });

    // Contact
    Route::controller(contactController::class)->group(function () {
        Route::get('/contact/view-contact', 'viewContact')->name('admin.view-contact');
        Route::post('/contact/view-contact', 'contactSubmit')->name('admin.submit-contact');
        Route::get('/contact/delete-message/{msg_id}', 'deleteMessage')->name('admin.delete-message');
    });
});

//Public Routes
Route::controller(publicController::class)->group(function () {
    Route::get('/', 'index')->name('public.index');
    Route::post('/', 'submitForm')->name('public.index');
});
