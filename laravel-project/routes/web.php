<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


// Home
Route::get('/', [PagesController::class, 'index'])->name('home')->middleware('auth');;
// All songs
Route::get('/pages/songs', [PagesController::class, 'songs'])->name('homeSongs')->middleware('auth');

// ----------------------- User Routing

// User Routes

//Show register form
Route::get('/register', [UserController::class, 'register'])->name('register')->middleware('guest');

//store - store a new user 
Route::post('/users', [UserController::class, 'store']);

//Show Login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//Logout user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');


// ------------------------------  ADMIN PART -------------------------------------------

// -------------------------Songs CRUD

// Table : Show All Songs In A Table
Route::get('/songs/index', [SongController::class, 'index'])->name('songs.index')->middleware('admin');

// Add Form
Route::get('/songs/add', [SongController::class, 'add'])->name('songs.add')->middleware('admin');

// Show song
Route::get('/songs/{song}', [SongController::class, 'show'])->name('songs.show')->where('id', '[0-9]+')->middleware('auth');

//Store new Song
Route::post('/songs/create', [SongController::class, 'create'])->name('songs.store')->middleware('admin');


// Edit Form
Route::get('/songs/{song}/edite', [SongController::class, 'edite'])->name('songs.edite')->middleware('admin');
// Edit an existing song
Route::put('/songs/{song}', [SongController::class, 'update'])->name('songs.update')->middleware('admin');
// Delete an existing song
Route::delete('/songs/{song}', [SongController::class, 'delete'])->name('songs.delete')->middleware('admin');


// ---------------------Comments
// Get All Comments
Route::get('/comments', [CommentController::class, 'index'])->middleware('admin');
// Add A Comment
Route::post('/comments', [CommentController::class, 'store'])->middleware('auth');
// Destroy a Comment
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->middleware('admin');

// Likw a comment 
Route::post('/favorites/{song}', [FavoritesController::class, 'store']);


// Favorites
Route::get('/favorites', [PagesController::class, 'favorite'])->middleware('auth');


