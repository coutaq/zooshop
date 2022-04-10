<?php

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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/categories', function () {
    return view('categories.index');
});
Route::get('/categories/{id}', function ($id) {
    return view('categories.show', compact('id'));
});

Route::get('/brands', function () {
    return view('brands.index');
});
Route::get('/brands/{id}', function ($id) {
    return view('brands.show', compact('id'));
});

Route::prefix('admin')->group(function () {
    Route::resource('category', App\Http\Controllers\AdminCategoryController::class);
    Route::resource('product', App\Http\Controllers\AdminProductController::class);
    Route::resource('subcategory', App\Http\Controllers\AdminSubcategoryController::class);
});

