<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MovieController::class, 'viewHomePage'])->name('homePage.view');
Route::get('/add-movie', [MovieController::class, 'viewAddMoviePage'])->name('addMoviePage.view');
Route::post('/movie/create', [MovieController::class, 'addNewMovie'])->name('addMoviePage.addNewMovie');
Route::get('/movie/delete/{movie_id}', [MovieController::class, 'deleteMovie'])->name('homePage.deleteMovie');
