<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

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

Route::get('/', [WebController::class,'index'])->name('home');
Route::get('/course-detail', [WebController::class,'detail'])->name('course-detail');
Route::get('/user-login', [AuthController::class,'login'])->name('user-login');
Route::get('/user-register', [AuthController::class,'register'])->name('user-register');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/add-user',[UserController::class,'index'])->name('add-user');
    Route::get('/manage-user',[UserController::class,'manage'])->name('manage-user');

});
