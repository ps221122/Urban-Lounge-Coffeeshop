<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmptyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\MenulistController;
use App\Http\Controllers\EventController;

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

// Route::post('/Ordered',[PersonController::class, 'store']);

Route::get('/Home',[EmptyController::class, 'index'])->name('index');

Route::get('/Breakfast',[MenulistController::class, 'index'])->name('breakfast');

Route::get('/Pizza',[MenulistController::class, 'index'])->name('pizza');

Route::get('/Vegan',[MenulistController::class, 'index'])->name('vegan');

Route::get('/Pasta',[MenulistController::class, 'index'])->name('pasta');

Route::get('/Dinner',[MenulistController::class, 'index'])->name('dinner');

Route::get('/Beverage',[MenulistController::class, 'index'])->name('beverage');

Route::get('/Alcohol',[MenulistController::class, 'index'])->name('alcohol');

Route::get('/Dessert',[MenulistController::class, 'index'])->name('dessert');

Route::get('/Events',[EventController::class, 'index'])->name('events');

Route::get('/Gallery', function () {
    return view('components.gallery');
})->name('gallery');

Route::get('/About', function () {
    return view('components.about');
})->name('about');

Route::get('/Privacy', function () {
    return view('components.privacy');
})->name('privacy');


Route::get('/FAQ', function () {
    return view('components.faq');
})->name('faq');

Route::get('/Terms', function () {
    return view('components.terms');
})->name('terms');

Route::get('/Contact', function () {
    return view('components.contact');
})->name('contact');


// Route::get('/Jobs',[JobController::class, 'index'])->name('jobs');

//  Route::post('/Jobs',[ApplicantController::class, 'store']);

// Route::get('/Jobs', function () {
//     return view('components.applied');
// });

// Route::get('/Ordered', function () {
//     return view('components.orderResult');
// })->name('Order');


// Route::get('/Locations', function () {
//     return view('components.location');
// })->name('location');


// Route::get('/Planet Defense', function () {
//    return view('components.planet');
// })->name('planet');

// Route::get('/Delivered', function () {
//    return view('components.orderCompleted');
// })->name('orderCompleted');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';