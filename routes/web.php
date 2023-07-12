<?php

use App\Http\Controllers\AnotherController;
use App\Http\Controllers\CategoryAdminController;
use App\Http\Controllers\EventAdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventDashboardController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SubcriptionAdminController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\UserAdminController;
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

// Route AUTH
Auth::routes();
Route::get('/register/eo', [App\Http\Controllers\Auth\RegisterController::class, 'showEoRegistrationForm']);
Route::post('/register/eo', [App\Http\Controllers\Auth\RegisterController::class, 'eoregister']);

// Gatau buat apaan xD
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route hanya untuk Authentikasi
Route::group(['middleware' => ['auth']], function () {
    Route::post('/subscribe', [SubscribeController::class, 'store']);
    Route::get('/thx', [AnotherController::class, 'thx'])->name('thx');
    Route::get('/subs', [AnotherController::class, 'subs'])->name('subs');
});

// Route untuk Registrasi ke Event (Main)
Route::group(['middleware' => ['auth', 'role:1,2']], function () {
    Route::get('/registration/histories', [RegistrationController::class, 'history']);
    Route::post('/registration', [RegistrationController::class, 'store']);
});

// Route untuk Pemilik Dashboard
Route::group(['middleware' => ['auth', 'role:2,3']], function () {
    Route::resource('/dashboard/events', EventDashboardController::class);

    Route::get('/dashboard', function () {
        return view('dashboard.index', [
            'events' => Event::where('user_id', Auth::user()->id)->get(),
        ]);
    });
});

// Route untuk Rare Role
Route::group(['middleware' => ['auth', 'role:3']], function () {
    Route::resource('/dashboard/admin/events', EventAdminController::class);
    Route::resource('/dashboard/admin/categories', CategoryAdminController::class);
    Route::resource('/dashboard/admin/users', UserAdminController::class);
    Route::resource('/dashboard/admin/subscriptions', SubcriptionAdminController::class);
});

// Route dengan Controller dan Tanpa otentikasi
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/event/{event:slug}', [EventController::class, 'show'])->name('eventShow');

// Route Tanpa Controller
Route::get('/', function () {
    return view('home', [
        'categories' => Category::latest()->get(),
        'events' => Event::latest()->get(),
    ]);
});
Route::get('/categories', function () {
    return view('categories', [
        'categories' => Category::all(),
        'events' => Event::latest()->get(),
    ]);
});

// Route lain
Route::get('/our', [AnotherController::class, 'our']);
Route::get('/done', [AnotherController::class, 'done']);
Route::get('/lord', [AnotherController::class, 'lord']);