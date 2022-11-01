<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmptyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\MenulistController;
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
// Route::get('/Ordered',[OrderDetailController::class, 'index']);

Route::post('/Ordered',[PersonController::class, 'store']);


Route::get('/',[EmptyController::class, 'index'])->name('index');

Route::get('/Jobs',[JobController::class, 'index'])->name('jobs');

Route::post('/Jobs',[ApplicantController::class, 'store']);

Route::get('/jobs', function () {
    return view('components.applied');
})->name('jobs');

Route::get('/Ordered', function () {
    return view('components.orderResult');
})->name('Order');

Route::get('/Gallery', function () {
    return view('components.gallery');
})->name('gallery');

Route::get('/Events', function () {
    return view('components.events');
})->name('events');

Route::get('/About', function () {
    return view('components.about');
})->name('about');

Route::get('/Contact', function () {
    return view('components.contact');
})->name('contact');

Route::get('/Locations', function () {
    return view('components.location');
})->name('location');

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

Route::get('/Planet Defense', function () {
   return view('components.planet');
})->name('planet');

Route::get('/Delivered', function () {
   return view('components.orderCompleted');
})->name('orderCompleted');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';