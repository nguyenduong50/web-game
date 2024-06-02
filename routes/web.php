<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ClientController;

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

//Client
Route::get('/', [ClientController::class, 'index']);
Route::get('/game/{slug}', [ClientController::class, 'game']);
Route::get('/category', [ClientController::class, 'category']);
Route::get('/category/{slug}', [ClientController::class, 'gameByCategory']);

Auth::routes();

//Admin
Route::get('admin/category/trash', [CategoryController::class, 'trash']);
Route::post('admin/category/delete', [CategoryController::class, 'delete']);
Route::post('admin/category/restore', [CategoryController::class, 'restore']);

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/admin/category', CategoryController::class)->names('category');
    Route::resource('/admin/user', UserController::class)->names('user');
    Route::resource('/admin/game', GameController::class)->names('game');
    Route::post('admin/category/destroy', [CategoryController::class, 'destroy']);
    Route::post('admin/game/destroy', [GameController::class, 'destroy']);
});

