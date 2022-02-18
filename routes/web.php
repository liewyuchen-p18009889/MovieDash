<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', [HomeController::class, 'displayAllMovies']);           //display all movies
Route::get('/home', [HomeController::class, 'searchMovies']);               //display search restaurants
Route::get('/movie/{id}', [MovieController::class, 'displayMovieDetails']); //display movie details