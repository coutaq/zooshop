<?php

use App\Services\BasketService;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
Route::get('/products/{id}', function ($id) {
    return view('products.show', compact('id'));
});
Route::put('profile/edit', function(Request $request){
    $user = Auth::user();
    $user->update($request->all());
    return redirect()->route('profile');
})->name('user.edit');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/orders', function () {
    return view('orders');
});
Route::get('/basket', function () {
    return view('basket');
});
Route::get('/admin', function () {
    return redirect()->route('category.index');
});

Route::get('/layout', function () {
    return view('layout');
});
Route::post('/basket-add', function (BasketService $bs, Request $request) {
    $user_id = $request->user;
    $product_id = $request->product;
    $bs->add(compact(['user_id', 'product_id']));
    return redirect()->back();
})->name('basket.add');
Route::prefix('admin')->group(function () {
    Route::resource('category', App\Http\Controllers\AdminCategoryController::class);
    Route::resource('product', App\Http\Controllers\AdminProductController::class);
    Route::resource('subcategory', App\Http\Controllers\AdminSubcategoryController::class);
});



Route::get('routes', function () {
    $routeCollection = Route::getRoutes();

    echo "<table style='width:100%'>";
    echo "<tr>";
    echo "<td width='10%'><h4>HTTP Method</h4></td>";
    echo "<td width='10%'><h4>Route</h4></td>";
    echo "<td width='10%'><h4>Name</h4></td>";
    echo "<td width='70%'><h4>Corresponding Action</h4></td>";
    echo "</tr>";
    foreach ($routeCollection as $value) {
        echo "<tr>";
        echo "<td>" . $value->methods()[0] . "</td>";
        echo "<td>" . $value->uri() . "</td>";
        echo "<td>" . $value->getName() . "</td>";
        echo "<td>" . $value->getActionName() . "</td>";
        echo "</tr>";
    }
    echo "</table>";
});