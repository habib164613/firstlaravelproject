<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SubCategoryController;

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

Route::get('/',[FrontendController::class,'index'])->name('front.index');

Route::group(['Middleware'=>'auth','prefix'=>'dashboard'],function(){

Route::get('/',[BackendController::class,'index'])->name('back.index');
Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('category',[CategoryController::class,'store'])->name('category.store');
Route::get('category',[CategoryController::class,'index'])->name('category.index');
Route::get('category/{category}',[CategoryController::class,'show'])->name('category.show');
Route::get('category/{category}/edit',[CategoryController::class,'edit'])->name('category.edit');
Route::put('category/{category}',[CategoryController::class,'update'])->name('category.update');
Route::delete('category/{category}',[CategoryController::class,'destroy'])->name('category.destroy');


Route::get('sub-categories/create', [SubCategoryController::class,'create'])->name('sub-categories.create');
Route::post('sub-categories', [SubCategoryController::class,'store'])->name('sub-categories.store');
Route::get('sub-categories', [SubCategoryController::class,'index'])->name('sub-categories.index');
Route::get('sub-categories/{sub_categories}', [SubCategoryController::class,'show'])->name('sub-categories.show');
Route::get('sub-categories/{sub_categories}/edit', [SubCategoryController::class,'edit'])->name('sub-categories.edit');
Route::delete('sub-categories/{sub_categories}', [SubCategoryController::class,'destroy'])->name('sub-categories.destroy');
Route::put('sub-categories/{sub_categories}',[SubCategoryController::class,'update'])->name('sub_categories.update');
 
Route::resource('sub-categories',SubCategoryController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
