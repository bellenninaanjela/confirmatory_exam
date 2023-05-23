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

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('/faqs', function () {
    return Inertia::render('Faqs');
});

Route::get('/menu', function () {
    return Inertia::render('Menu');
});

Route::get('/menuitem', function () {
    return Inertia::render('MenuItem');
});

Route::get('/checkout', function () {
    return Inertia::render('Checkout');
});

Route::get('/order-received', function () {
    return Inertia::render('OrderReceived');
});
