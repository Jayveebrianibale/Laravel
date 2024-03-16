<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


 
// Route::post('/greeting', function () {
//     return 'Hello Im Izumi';
// });

// Route::match(['match','get', 'post'], '/updateUserInfo', function () {
//     return 'jireh pogi';
// });
 
// Route::any('/', function () {
//     // ...
// });
Route::get('/users', function (Request $request) {
    return $request->name .'' . $request->email;
});

