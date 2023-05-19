<?php

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\Api\Auth\UserContoller;
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

Route::post('login', [UserContoller::class, 'login']);
Route::post('signup', [UserContoller::class, 'signup']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
