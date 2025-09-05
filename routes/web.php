<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Filament ;
use App\Http\Controllers\DatabaseImportController;

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




/*Route::get('/', function () {
    return view('welcome');
});*/

/*
Route::get('/scrap',[App\Http\Controllers\ScrapController::class,'scrap']) ;
Route::get('/fetch',[App\Http\Controllers\ScrapController::class,'fetchGames']) ;
Route::get('/import',[App\Http\Controllers\ScrapController::class,'importData']) ;
*/
Route::get('/', function () {
    return redirect('/admin');
});


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/all', [App\Http\Controllers\GameController::class, 'index'])->middleware('auth');


//Route::get('/fetch-games', [App\Http\Controllers\FetchController::class, 'fetchGames']);

Route::get('/games', [App\Http\Controllers\GaController::class, 'index']);
Route::get('/games/{id}', [App\Http\Controllers\GaController::class, 'show']);



