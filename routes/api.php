<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\GameSimilarityController;

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

Route::post('register',[App\Http\Controllers\Api\AuthController::class,'register'])->name('register') ;
Route::post('login',[App\Http\Controllers\Api\AuthController::class,'login'])->name('login') ;
Route::post('logout',[App\Http\Controllers\Api\AuthController::class,'logout'])->name('logout') ;


Route::get('all/game',[App\Http\Controllers\Api\GameController::class,'index']) ;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::middleware(['auth:sanctum'])->group(function()

    {

Route::get('latestGames',[App\Http\Controllers\Api\GameController::class,'latestGames']) ;
Route::post('show',[App\Http\Controllers\Api\GameController::class,'show']) ;
Route::get('all/category',[App\Http\Controllers\Api\CategoryController::class,'index']) ;
Route::post('getGamesByCategory',[App\Http\Controllers\Api\GameController::class,'getGamesByCategory']) ;
Route::get('MostFollow',[App\Http\Controllers\Api\GameController::class,'MostFollow']) ;
Route::post('UpdateUserName',[App\Http\Controllers\Api\UserController::class,'UpdateUserName']) ;
Route::post('search', [App\Http\Controllers\Api\GameController::class, 'search']);
Route::post('search2', [App\Http\Controllers\Api\GameController::class, 'search2']);

Route::post('AddOrUpdateComment', [App\Http\Controllers\Api\ReviewingController::class,'addOrUpdateComment']);
Route::post('getCommentsByGameName', [App\Http\Controllers\Api\GameController::class, 'getCommentsByGameName']);


Route::get('recommend/{user}/{n?}', [RecommendationController::class, 'recommend']);
Route::get('similar/{game}/{n?}', [GameSimilarityController::class, 'similar']);

 }) ;


 
