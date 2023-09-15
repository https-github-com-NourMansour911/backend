<?php

use App\Models\Coach;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\BookedSessionController;
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
    return view('welcome');
});
Route::get('contact-us', function () {
    return view('contactus');
});
// //----------Coach Routes------------
// Route::get('/coaches/{coach}', [CoachController::class, 'show']);
// Route::get('/coaches/{coach}/plans', [CoachController::class, 'plans']);
// Route::get('/coaches/{coach}/reviews', [CoachController::class, 'reviews']);

// //------------User Routes------------
// Route::get('/{user}', [UserController::class, 'show']);
// Route::get('/users', [UserController::class, 'index']);
// Route::get('/{user}/edit', [UserController::class, 'edit']);
// Route::put('/{user}', [UserController::class, 'update']);
// Route::delete('/{user}', [UserController::class, 'destroy']);
// Route::get('/{user}/reviews', [UserController::class, 'reviews']);

// //------------------Plan Routes------------------
Route::get('/plans', [PlanController::class, 'index']);
Route::post('/plans', [PlanController::class, 'store']);
Route::put('/plans', [PlanController::class, 'update']);
Route::delete('/plans', [PlanController::class, 'destroy']);

// //------------------BookedSession Routes------------------
// Route::get('/bookedsessions/create', [BookedSessionController::class, 'create']);
// Route::post('/bookedsessions', [BookedSessionController::class, 'store']);
// Route::get('/bookedsessions/{bookedsession}/edit', [BookedSessionController::class, 'edit']);
// Route::put('/bookedsessions/{bookedsession}', [BookedSessionController::class, 'update']);
// Route::delete('/bookedsessions/{bookedsession}', [BookedSessionController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', function(){
    return view('coaches.dashboard', ['user' => Auth::user()]);
});
Route::get('/profile', function () {
    return view('coaches.profile', ['user' => Auth::user()]);
});

Route::put('/profile', [CoachController::class, 'update']);
Route::delete('/delete-account', [CoachController::class, 'destroy']);

