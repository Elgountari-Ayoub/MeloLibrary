<?php

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
Route::get('/', function () {
    return view('index');
});

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

// Add Form
// Route::get('/songs/add', [SongsController::class, 'create']);
// Store a new song
// Route::get('/songs/{song}', [SongsController::class, 'store']);

// Table : Show All Songs In A Table
Route::get('/songs/index', [SongController::class, 'index']);
