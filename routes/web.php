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
//----------Coach Routes--------
Route::get('/coaches', [CoachController::class, 'index']);
Route::get('/coaches/{coach}', [CoachController::class, 'show']);
Route::get('/coaches/create', [CoachController::class, 'create']);
Route::post('/coaches', [CoachController::class, 'store']);
Route::get('/coaches/{coach}/edit', [CoachController::class, 'edit']);
Route::put('/coaches/{coach}', [CoachController::class, 'update']);
Route::delete('/coaches/{coach}', [CoachController::class, 'destroy']);
Route::get('/coaches/{coach}/clients', [CoachController::class, 'clients']);
Route::get('/coaches/{coach}/plans', [CoachController::class, 'plans']);
Route::get('/coaches/{coach}/reviews', [CoachController::class, 'reviews']);

//------------User Routes------------
Route::get('/{user}', [UserController::class, 'show']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/{user}/edit', [UserController::class, 'edit']);
Route::put('/{user}', [UserController::class, 'update']);
Route::delete('/{user}', [UserController::class, 'destroy']);
Route::get('/{user}/reviews', [UserController::class, 'reviews']);

//------------------Plan Routes------------------
Route::get('/plans/create', [PlanController::class, 'create']);
Route::post('/plans', [PlanController::class, 'store']);
Route::get('/plans/{plan}/edit', [PlanController::class, 'edit']);
Route::put('/plans/{plan}', [PlanController::class, 'update']);
Route::delete('/plans/{plan}', [PlanController::class, 'destroy']);

//------------------BookedSession Routes------------------
Route::get('/bookedsessions/create', [BookedSessionController::class, 'create']);
Route::post('/bookedsessions', [BookedSessionController::class, 'store']);
Route::get('/bookedsessions/{bookedsession}/edit', [BookedSessionController::class, 'edit']);
Route::put('/bookedsessions/{bookedsession}', [BookedSessionController::class, 'update']);
Route::delete('/bookedsessions/{bookedsession}', [BookedSessionController::class, 'destroy']);
