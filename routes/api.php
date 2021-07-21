<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Http\Controllers\AuthController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::put('user/{id}', [AuthController::class, 'edit']);
Route::get('xuser', [AuthController::class, 'xprofile']);
Route::post('logout', [AuthController::class, 'logout']);


Route::middleware('auth:api')->group( function () {
    Route::resource('courses',CoursesController::class );
});