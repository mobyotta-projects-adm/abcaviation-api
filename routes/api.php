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

    // business crud routes
    Route::post('business', [BusinessController::class, 'create'])->name('business.create');
    Route::get('business/{business}', [BusinessController::class, 'show'])->name('business.show');
    Route::patch('business/{business}', [BusinessController::class, 'update'])->name('business.update');
    Route::delete('business/{business}', [BusinessController::class, 'delete'])->name('business.delete');

    // business location crud


    Route::post('business/{business}/location', [BusinessController::class, 'createLocation'])->name('business.createLocation');
    Route::get('business/{business}/location', [BusinessController::class, 'getAllLocation'])->name('business.getAllLocation');
    Route::get('business/{business}/location/{location}', [BusinessController::class, 'getLocation'])->name('business.getLocation');
    Route::patch('business/{business}/location/{location}', [BusinessController::class, 'updateLocation'])->name('business.updateLocation');
    Route::delete('business/{business}/location/{location}', [BusinessController::class, 'deleteLocation'])->name('business.deleteLocation');
    
});
