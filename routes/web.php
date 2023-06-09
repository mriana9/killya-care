<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ProfileController;
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




Route::get('link', function () {Artisan::call('storage:link');
});


Route::resource('users', UserController::class);
Route::post('/login', [UserController::class, 'login'])->name('login.submit');
Route::resource('appointments', AppointmentController::class);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/contact', [ProfileController::class,'contact'])->name('contact');
Route::get('/news-details/{id}', [ProfileController::class,'show'])->name('news-details');
Route::post('/comment', [ProfileController::class,'comment'])->name('comment');


Route::get('/contacts/{contact}/edit', [ProfileController::class, 'editcontact'])->name('contacts.edit');
Route::delete('/contacts/{contact}', [ProfileController::class, 'destroycontact'])->name('contacts.destroy');
Route::put('/contacts/{id}', [ProfileController::class, 'updatecontact'])->name('contacts.update');



Route::delete('/comments/{id}', [ProfileController::class,'destroyComment'])->name('comments.destroy');




Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
});
// Route::get('/profile', function () {
//     return view('profile');
// });

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/news-details', function () {
    return view('news-details');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/not-found', function () {
    return view('not-found');
});
