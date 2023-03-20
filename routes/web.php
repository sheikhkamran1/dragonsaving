<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\DownloadController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\NoticeController as AdminNoticeController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\SchemeController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Frontend\PageController as FrontendPageController;
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

Route::get('/', [FrontendPageController::class,'home']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/menu',MenuController::class);
Route::resource('/post',PostController::class);
Route::resource('/message',MessageController::class);
Route::resource('/scheme',SchemeController::class);
Route::resource('/gallery',GalleryController::class);
Route::resource('/event',EventController::class);
Route::resource('/service',ServiceController::class);
Route::resource('/carousel',CarouselController::class);
Route::resource('/about',AboutController::class);
Route::resource('/profile',AdminProfileController::class);
Route::resource('/download',DownloadController::class);
Route::resource('/notice',AdminNoticeController::class);
Route::resource('/offers',OfferController::class);
require __DIR__.'/auth.php';
