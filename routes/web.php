<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/category/{category_id}', [App\Http\Controllers\HomeController::class, 'category_index'])->name('categorys');

Route::get('/faqs', function () {
    return Inertia::render('Faqs');
});

// Route::get('/menu', function () {
//     return Inertia::render('Menu');
// });

    
Route::get('/menu', [App\Http\Controllers\ProductController::class, 'index'])->name('menu');


Route::get('/products', [App\Http\Controllers\ProductController::class, 'product_show'])->name('product');

// add product routes
Route::get('/add-products', [App\Http\Controllers\ProductController::class, 'add_form'])->name('add_product');
Route::post('/add-products', [App\Http\Controllers\ProductController::class, 'store_product'])->name('store_product');

// edit product routes
Route::get('/products/edit/{products}', [App\Http\Controllers\ProductController::class, 'edit_form'])->name('edit_product');
Route::put('/products/edit/{products}', [App\Http\Controllers\ProductController::class, 'update_product'])->name('update_product');

// delete product route
Route::delete('/products/delete/{product}', [App\Http\Controllers\ProductController::class, 'delete_product'])->name('delete_product');

Route::get('/menuitem', function () {
    return Inertia::render('MenuItem');
});

Route::get('/checkout', function () {
    return Inertia::render('Checkout');
});

Route::get('/order-received', function () {
    return Inertia::render('OrderReceived');
});
