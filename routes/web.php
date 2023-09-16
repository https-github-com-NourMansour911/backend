<?php

use App\Models\Coach;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\BookedSessionController;
use App\Http\Controllers\TransformationController;
use App\Http\Controllers\CertificationController;
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
    return view('contact');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function(){
//------------------Plan Routes------------------
Route::get('/plans', [PlanController::class, 'index']);
Route::post('/plans', [PlanController::class, 'store']);
Route::put('/plans', [PlanController::class, 'update']);
Route::delete('/plans', [PlanController::class, 'destroy']);

//------------------Transformation Routes------------------
Route::get('/transformations', [TransformationController::class, 'index']);
Route::post('/transformations', [TransformationController::class, 'store']);
Route::delete('/transformations', [TransformationController::class, 'destroy']);

//------------------Certification Routes------------------
Route::get('/certifications', [CertificationController::class, 'index']);
Route::post('/certifications', [CertificationController::class, 'store']);
Route::delete('/certifications', [CertificationController::class, 'destroy']);

Route::get('/dashboard', [CoachController::class, 'dashboard']);
Route::get('/profile', [CoachController::class, 'index']);
Route::put('/profile', [CoachController::class, 'update']);

});
Auth::routes();
