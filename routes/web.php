<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Admin
Route::get('admin/category/trash', [CategoryController::class, 'trash']);
Route::post('admin/category/delete', [CategoryController::class, 'delete']);
Route::post('admin/category/restore', [CategoryController::class, 'restore']);

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/admin/category', CategoryController::class)->names('category');
    Route::resource('/admin/user', UserController::class)->names('user');
    Route::post('admin/category/destroy', [CategoryController::class, 'destroy']);
});

