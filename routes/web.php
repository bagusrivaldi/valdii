<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Post\PostController; 

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get("/post/{id}", [PostController::class, 'show'])->name('post');
Route::get("/profile/{id}", [ProfileController::class, 'show']);

Route::middleware('auth')->group(function () {
    Route::get("/create", [PostController::class, 'create']);
    Route::post("/create", [PostController::class, 'store'])->name('create');

    Route::get("/profile/{id}/edit", [ProfileController::class, 'edit'])->name('edit');
    Route::patch("/profile/{id}", [ProfileController::class, 'update']);
});