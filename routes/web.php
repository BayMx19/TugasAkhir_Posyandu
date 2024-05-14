<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaderController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\PencatatanController;
use App\Http\Controllers\ProfileController;



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
Route::get('/dashboard', [HomeController::class, 'getcount'])->name('getcount');
// Route::get('/dashboard', [HomeController::class, 'getcountAnak'])->name('getcountAnak');



// START USERS
Route::get('/master_users', [UsersController::class, 'index']);
Route::get('/add-users', function () {
    return view('master-users.add-users');
});
Route::get('/edit-users/{id}', [UsersController::class, 'edit']);
Route::post('/edit-users/{id}/update', [UsersController::class, 'update']);
Route::get('/detail-users/{id}', [UsersController::class, 'detail']);
Route::post('/add-users/store', [UsersController::class, 'input']);
Route::get('/delete-users/{id}', [UsersController::class, 'delete'])->name('delete-user');
// END USERS

// START KADER
Route::get('/master_kader', [KaderController::class, 'index']);
Route::get('/add-kader', [KaderController::class, 'addKader']);
Route::post('/add-kader/store', [KaderController::class, 'input']);
Route::get('/detail-kader/{id}', [KaderController::class, 'detail']);
Route::get('/edit-kader/{id}', [KaderController::class, 'edit']);
Route::post('/edit-kader/{id}/update', [KaderController::class, 'update']);
Route::get('/delete-kader/{id}', [KaderController::class, 'delete'])->name('delete-kader');

// END KADER


// START ANAK
Route::get('/master_anak', [AnakController::class, 'index']);
Route::get('/add-anak', [AnakController::class, 'addAnak']);
Route::post('/add-anak/store', [AnakController::class, 'input']);
Route::get('/detail-anak/{id}', [AnakController::class, 'detail']);
Route::get('/edit-anak/{id}', [AnakController::class, 'edit']);
Route::post('/edit-anak/{id}/update', [AnakController::class, 'update']);
Route::get('/delete-anak/{id}', [AnakController::class, 'delete'])->name('delete-anak');

// END ANAK

Route::get('/pencatatan', [PencatatanController::class, 'index']);
Route::get('/add-pencatatan', [PencatatanController::class, 'addPencatatan']);
Route::post('/add-pencatatan/store', [PencatatanController::class, 'input']);
Route::get('/detail-pencatatan/{id}', [PencatatanController::class, 'detail']);
Route::get('/edit-pencatatan/{id}', [PencatatanController::class, 'edit']);
Route::post('/edit-pencatatan/{id}/update', [PencatatanController::class, 'update']);
Route::get('/delete-pencatatan/{id}', [PencatatanController::class, 'delete'])->name('delete-pencatatan');


//START PROFILE
Route::get('/profile', [ProfileController::class, 'index']);
//END PROFILE