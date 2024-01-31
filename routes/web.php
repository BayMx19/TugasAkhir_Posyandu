<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaderController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\PencatatanController;



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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/master_users', [UsersController::class, 'index']);
Route::get('/master_kader', [KaderController::class, 'index']);
Route::get('/master_anak', [AnakController::class, 'index']);
Route::get('/perkembangan', [PencatatanController::class, 'index']);