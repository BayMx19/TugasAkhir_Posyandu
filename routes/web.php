<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
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
Route::get('/logout', [LoginController::class, 'logout']);


Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');


Route::get('/master_users', [UsersController::class, 'index']);
Route::get('/add-users', function () {
    return view('master-users.add-users');
});
Route::get('/edit-users/{id}', [UsersController::class, 'edit']);
Route::post('/edit-users/{id}/update', [UsersController::class, 'update']);
Route::get('/detail-users/{id}', [UsersController::class, 'detail']);
Route::post('/add-users/store', [UsersController::class, 'input']);
Route::get('/delete-users/{id}', [UsersController::class, 'delete'])->name('delete-user');



Route::get('/master_kader', [KaderController::class, 'index']);
Route::get('/add-kader', function () {
    return view('master-kader.add-kader');
});

Route::get('/master_anak', [AnakController::class, 'index']);
Route::get('/add-anak', function () {
    return view('master-anak.add-anak');
});

Route::get('/perkembangan', [PencatatanController::class, 'index']);
Route::get('/add-perkembangan', function () {
    return view('pencatatan.add-perkembangan');
});