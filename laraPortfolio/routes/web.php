<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\public\publicController;
use App\Http\Controllers\admin\settingsController;
use App\Http\Controllers\admin\dashboardController;

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
    Route::get('/create-menu', [settingsController::class, 'createmenu'])->name('admin.create-menu');
    Route::get('/view-menu', [settingsController::class, 'viewmenu'])->name('admin.view-menu');
    Route::get('/update-menu', [settingsController::class, 'updatemenu'])->name('admin.update-menu');
});

//Public Routes
Route::get('/', [publicController::class, 'index'])->name('public.index');
