<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

Route::get('/test', [TestController::class, 'getTest'])->middleware('token.check');
Route::post('/test', [TestController::class, 'postTest'])->middleware('token.check');
Route::put('/test', [TestController::class, 'putTest'])->middleware('token.check');
Route::patch('/test', [TestController::class, 'patchTest'])->middleware('token.check');
Route::delete('/test', [TestController::class, 'deleteTest'])->middleware('token.check');


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Get Method
Route::get('/get', function () {
    return 'This is my name Izumi';
});

// Post Method
Route::post('/post', function () {
    return 'This is my POST name Izumi';
});

// Put Method
Route::put('/put/{id}', function () {
    return 'This is my PUT name Izumi';
});

// Patch Method
Route::patch('/putv2/{id}', function () {
    return 'This is my PATCH name Izumi';
});

// Delete Method
Route::delete('/delete/{id}', function () {
    return 'This is my DELETE name Izumi';
});

