<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
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


Route::prefix('admin')->name('admin.')->group(function(){
    Route::resource('admin', AdminController::class);

});

Route::resource('/', ProfileController::class)->only('index');

Route::get('/profiles/create/{id}', [ProfileController::class, 'create']);
Route::resource('profiles', ProfileController::class)->except(['index', 'create']);

Route::resource('user', UserController::class);

// PROCESSO LOGIN

//criar conta
Route::get('/login', [LoginController::class, 'login'])->name('user.login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');






