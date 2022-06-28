<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\websiteController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\AddPostController;
use App\Http\Controllers\MailController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("getwebsitedata",[websiteController::class,'getData']);

Route::post("addSubscribe",[SubscribeController::class,'store']);
//Route::prefix('API')->group(function () {
    Route::post("addSubscribe",[SubscribeController::class,'store']);
//});

Route::post("addPost",[AddPostController::class,'store']);

