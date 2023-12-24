<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManagementAccountController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// Login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/register', [LoginController::class, 'store'])->name('register');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/tracker-jobs', [DashboardController::class, 'create'])->middleware('auth');
Route::post('/dashboard/tracker-jobs', [DashboardController::class, 'store'])->middleware('auth');
Route::get('/dashboard/tracker-jobs/{data_users}/edit', [DashboardController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/tracker-jobs/{data_users}/edit', [DashboardController::class, 'update'])->middleware('auth');
Route::get('/dashboard/tracker-jobs/{data_users}/details', [DashboardController::class, 'show'])->middleware('auth');
Route::delete('/dashboard/tracker-jobs/{data_users}', [DashboardController::class, 'destroy'])->middleware('auth');

//Management Account
Route::get('/dashboard/management-account/change-info/{account}/profile', [ManagementAccountController::class, 'index'])->middleware('auth');
Route::put('/dashboard/management-account/change-info/{account}/profile', [ManagementAccountController::class, 'UpdateInfo'])->middleware('auth');

Route::get('/dashboard/management-account/change-password/{account}/profile', [ManagementAccountController::class, 'IndexChange'])->middleware('auth');
Route::put('/dashboard/management-account/change-password/{account}/profile', [ManagementAccountController::class, 'ChangePassword'])->middleware('auth');