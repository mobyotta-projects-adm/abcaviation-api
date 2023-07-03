<?php

use App\Http\Controllers\DashboardController;
use App\Http\Livewire\DataTables\LocationTable;
use App\Http\Livewire\DataTables\UsersDataTable;
use App\Http\Livewire\Pages\EditLocation;
use App\Http\Livewire\Pages\EditUserPersonal;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {



    Route::get('/dashboard', function () {
        return redirect('me');
    })->name('dashboard');

    Route::get('me', [DashboardController::class, 'me'])->name('me');
    Route::get('newsfeed', [DashboardController::class, 'newsfeed'])->name('newsfeed');
    Route::get('tasks', [DashboardController::class, 'tasks'])->name('tasks');
    Route::get('location', LocationTable::class)->name('location');
    Route::get('people', UsersDataTable::class)->name('people');
    Route::get('schedule', [DashboardController::class, 'schedule'])->name('schedule');
    Route::get('approved-timesheet', [DashboardController::class, 'approved_timesheet'])->name('approved_timesheet');
    Route::get('export-timesheet', [DashboardController::class, 'export_timesheet'])->name('export_timesheet');
    Route::get('report', [DashboardController::class, 'report'])->name('report');
    Route::get('/location/edit/{location}', EditLocation::class)->name('editlocation');
    Route::get('/user/edit/personal/{user}', EditUserPersonal::class)->name('editUser');
});
