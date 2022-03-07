<?php

use App\Http\Controllers\MovieController;
// use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\DashboardadminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WatchlistController;
use App\Http\Controllers\ReviewController;


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

/*Route::get('/', function () {
    return view('home');
});*/
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/genre', [PagesController::class, 'genre']);
// Route::get('/watchlist', [PagesController::class, 'watchlist']);
// Route::get('/mylists', [PagesController::class, 'mylists']);
// Route::get('/createlist', [PagesController::class, 'createlist']);
// Route::get('/top_rated', [PagesController::class, 'top_rated']);
// Route::get('/user/{id}', [PagesController::class, 'index']);

/*Item page*/
//Routes for CRUD
Route::resource('movies', MovieController::class)->names('movies');
Route::get('admin', [DashboardadminController::class, 'index'])->name('admin');
Route::resource('users', UserController::class)->names('users');
// Route::resource('actors', ActorController::class)->names('actors');
Auth::routes(); //Login logout and register
Route::resource('roles', RoleController::class)->names('roles');

//Watchlist
Route::get('add-to-watchlist/{movieid}', [WatchlistController::class, 'addToWatchlist'])->name('addToWatchlist');
Route::get('/watchlist/{id}',[WatchlistController::class, 'show'])->name('displayWatchlist');
Route::get('/delete-watchlist-item/{id}', [WatchlistController::class, 'destroy'])->name('delete.watchlist.item');
Route::get('movie/{id}', [MovieController::class, 'showFromWatchlist'])->name('show.from.watchlist');

//Reviews
Route::resource('reviews', ReviewController::class);
Route::resource('movies.reviews', ReviewController::class)->shallow();


//Route for searchbar
Route::get('/search/query',[SearchController::class, 'query']);
