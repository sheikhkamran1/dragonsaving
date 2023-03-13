<?php

use App\Http\Controllers\api\ApiController;
use App\Http\Controllers\api\ContactController;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('profile',[ApiController::class,'getProfile']);
Route::get('about',[ApiController::class,'getAbout']);
Route::get('gallery',[ApiController::class,'getGallery']);
Route::get('event',[ApiController::class,'getEvent']);
Route::get('offers',[ApiController::class,'getOffers']);
Route::get('notice',[ApiController::class,'getNotice']);
Route::get('carousel',[ApiController::class,'getCarousel']);
Route::get('download',[ApiController::class,'getDownload']);
Route::apiResource('contact',ContactController::class);

