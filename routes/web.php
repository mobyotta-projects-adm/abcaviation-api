<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {  return view('welcome'); });

Route::get('/newsfeed', function () {    return view('user.newsfeed'); });
Route::get('/tasks', function () {    return view('user.tasks'); });
Route::get('/locations', function () {    return view('user.locations'); });
Route::get('/team', function () {    return view('user.team'); });
Route::get('/me', function () {
    return view('dashboard');
})->name('dashboard');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
