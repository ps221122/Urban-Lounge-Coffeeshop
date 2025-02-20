<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmptyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\MenulistController;
use App\Http\Controllers\EventlistController;
use App\Http\Controllers\CartController;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\userController;


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

Route::get('/Home',[EmptyController::class, 'index'])->name('index');

Route::get('/Breakfast',[MenulistController::class, 'index'])->name('breakfast');

Route::get('/Pizza',[MenulistController::class, 'index'])->name('pizza');

Route::get('/Vegan',[MenulistController::class, 'index'])->name('vegan');

Route::get('/Pasta',[MenulistController::class, 'index'])->name('pasta');

Route::get('/Dinner',[MenulistController::class, 'index'])->name('dinner');

Route::get('/Beverage',[MenulistController::class, 'index'])->name('beverage');

Route::get('/Alcohol',[MenulistController::class, 'index'])->name('alcohol');

Route::get('/Dessert',[MenulistController::class, 'index'])->name('dessert');

Route::get('/Specials',[MenulistController::class, 'index'])->name('specials');

Route::get('/Events',[EventlistController::class, 'index','store'])->name('events');

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');

Route::post('/cart', [CartController::class, 'addToCart']);

Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');

Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');

Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::post('Order',[PersonController::class, 'store']);

//Route::get('Order',[PersonController::class, 'sendTestNotification']);

Route::get('/Preview/{id}/', [MenulistController::class, 'edit']);

Route::get('/preview/{id}/', [EventlistController::class, 'show']);

Route::get('/Jobs',[JobController::class, 'index'])->name('jobs');

Route::post('/jobs',[ApplicantController::class, 'store']);

Route::get('/Profile/{id}/update', [userController::class, 'emailUpdate']);

Route::get('/Profile/{id}/update', [userController::class, 'imageUpdate']);

Route::post('/change-password', [userController::class, 'updatePassword'])->name('update-password');

Route::get('/Profile/{id}/delete', [userController::class, 'destroy']);

Route::get('/Gallery', function () {
    return view('source.gallery');
})->name('gallery');

Route::get('/About', function () {
    return view('source.about');
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

Route::get('/Planet Defense', function () {
   return view('components.game');
})->name('planet');

Route::get('/Profile', function () {
   return view('source.profile');
})->name('profile');

Auth::routes([
    "vertify"=>true
]);

Route::get('/Dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    return "Cleared!";

});