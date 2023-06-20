<?php

use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return redirect('login');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/dashboard', function () {
    return redirect('me');
})->name('dashboard');

Route::get('me', [DashboardController::class, 'me'])->name('me');
Route::get('newsfeed', [DashboardController::class, 'newsfeed'])->name('newsfeed');
Route::get('tasks', [DashboardController::class, 'tasks'])->name('tasks');
Route::get('location', [DashboardController::class, 'location'])->name('location');
Route::get('people', [DashboardController::class, 'people'])->name('people');
Route::get('schedule', [DashboardController::class, 'schedule'])->name('schedule');
Route::get('approved-timesheet', [DashboardController::class, 'approved_timesheet'])->name('approved_timesheet');
Route::get('export-timesheet', [DashboardController::class, 'export_timesheet'])->name('export_timesheet');
Route::get('report', [DashboardController::class, 'report'])->name('report');
