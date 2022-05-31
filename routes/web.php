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
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('showcategory', [CategoryController::class, 'index']);

Route::get('create_category',[CategoryController::class, 'addcategory']);

Route::post('category-store',[CategoryController::class,'store']);

Route::get('category-edit/{id}',[CategoryController::class, 'edit']);
Route::put('category-update/{id}',[CategoryController::class, 'update']);

// width delete
// Route::get('category-delete/{id}',[CategoryController::class, 'delete']);
Route::delete('category-delete/{id}',[CategoryController::class, 'delete']);


Route::get('/',[UserController::class,'dashboard']);