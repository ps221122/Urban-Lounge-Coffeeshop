<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmptyController;
use App\Http\Controllers\PersonController;
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
Route::get('/Ordered/{id}/',[PersonController::class, 'edit']);
Route::post('/',[PersonController::class, 'store']);
Route::get('/',[EmptyController::class, 'index'])->name('index');

Route::get('/Ordered', function () {
    return view('components.orderResult');
})->name('Order');

Route::get('/Breakfast', function () {
    return view('menu.menuList');
})->name('breakfast');

Route::get('/Pizza', function () {
   return view('menu.menuList');
})->name('pizza');


Route::get('/Vegan', function () {
   return view('menu.menuList');
})->name('vegan');

Route::get('/Pasta', function () {
   return view('menu.menuList');
})->name('pasta');

Route::get('/Dinner', function () {
   return view('menu.menuList');
})->name('dinner');

Route::get('/Beverage', function () {
   return view('menu.menuList');
})->name('beverage');

Route::get('/Alcohol', function () {
   return view('menu.menuList');
})->name('alcohol');

Route::get('/Dessert', function () {
   return view('menu.menuList');
})->name('dessert');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';