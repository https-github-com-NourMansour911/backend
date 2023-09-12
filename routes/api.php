<?php

use App\Models\Coach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CoachController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\PlanController;
use App\Http\Controllers\api\ReviewController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



//public routes
//------------------User Routes------------------
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);



//private routes
//------------------User Routes------------------

Route::group(['middleware' => ['auth:sanctum']], function(){
    //------------------User Routes------------------
    Route::get('/user', [UserController::class, 'index']);
    Route::put('/user', [UserController::class, 'update']);
    Route::delete('/user', [UserController::class, 'destroy']);
    Route::get('/logout',[AuthController::class, 'logout']);

    //------------------Coach Routes------------------
    Route::get('/coaches', [CoachController::class, 'index']);
    Route::get('/coaches/{coach}', [CoachController::class, 'show']);
    Route::get('/coaches/search/{name}', [CoachController::class, 'search']);

    //------------------Plan Routes------------------
    Route::get('/coaches/{coach}/plans', [PlanController::class, 'index']);
    Route::get('/plans/{plan}', [PlanController::class, 'show']);
    Route::post('/plans/{plan}/purchase', [PlanController::class, 'purchase']);
    
    //------------------Reviews Routes------------------
    Route::get('/coaches/{coach}/reviews', [ReviewController::class, 'index']);
    Route::put('/reviews/{review}', [ReviewController::class, 'update']);
    Route::delete('/reviews/{review}', [ReviewController::class, 'destroy']);
    Route::post('coaches/{coach}/reviews', [ReviewController::class, 'store']);
    
    //------------------Transformation Routes------------------
    Route::get('/coaches/{coach}/transformations', [CoachController::class, 'getTransformation']);
});
