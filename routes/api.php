<?php

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\User\BusinessController;
use App\Http\Controllers\Api\UserController;
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

Route::post('login', [AuthController::class, 'login']);
Route::post('signup', [AuthController::class, 'signup']);


@Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::resource('/users', UserController::class);

    Route::post('business', [BusinessController::class, 'create'])->name('business.create');
    Route::get('business/{business}', [BusinessController::class, 'show'])->name('business.show');
    Route::patch('business/{business}', [BusinessController::class, 'update'])->name('business.update');
    Route::delete('business/{business}', [BusinessController::class, 'delete'])->name('business.delete');
});
