<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\RegistrationController;
use App\Models\Category;
use App\Models\Event;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PHPUnit\Event\EventCollection;

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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'role:1,2']], function () {
    Route::get('/registration/histories', [RegistrationController::class, 'history']);
});
Route::group(['middleware' => ['auth', 'role:2']], function () {

});
Route::group(['middleware' => ['auth', 'role:3']], function () {

});

Route::get('/events', [EventController::class, 'index']);
Route::get('/events/event/{event:slug}', [EventController::class, 'show']);
Route::get('/registration', [RegistrationController::class, 'index']);

Route::get('/', function () {
    return view('home', [
        'categories' => Category::latest()->get(),
        'events' => Event::latest()->get()
    ]);
});
Route::get('/categories', function () {
    return view('categories', [
        'categories' => Category::all(),
        'events' => Event::latest()->get()
    ]);
});