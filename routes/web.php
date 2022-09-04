<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GenreController;
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

// Index
Route::get('/', [ItemController::class, 'index'])->name("home");

// Create
Route::get('/create', [AdminController::class, 'create'])->name("create");
Route::post('/store', [AdminController::class, 'store'])->name("store");

// Edit
Route::get('/edit/{id}', [AdminController::class, 'edit'])->name("edit");
Route::post('/update/{id}', [AdminController::class, 'update'])->name("update");

// Destroy
Route::delete('/destroy/{id}', [AdminController::class, 'destroy'])->name("destroy");

// List
Route::get('/list',[AdminController::class, 'index'])->name("list");


// Genre
// List
Route::get('/genre-list',[GenreController::class,'index'])->name("list_genre");

// Create
Route::get('/gcreate',[GenreController::class, 'create'])->name("genre_create");
Route::post('/gstore',[GenreController::class, 'store'])->name("genre_store");

// Destroy
Route::delete('/destroy/{id}', [GenreController::class, 'destroy'])->name("genre_hapus");