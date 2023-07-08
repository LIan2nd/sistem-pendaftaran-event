<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\RegistrationController;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/events', [EventController::class, 'index']);
Route::get('/registration', [RegistrationController::class, 'index']);
Route::get('/registration/histories', [RegistrationController::class, 'history'])->middleware('auth');
Route::get('/categories', function () {
    return view('categories', [
        'categories' => Category::all(),
        'events' => Event::latest()->get()
    ]);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');