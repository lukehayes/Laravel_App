<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;

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

Route::get('/',          [FrontController::class, 'index']);
Route::get('/create',    [FormController::class, 'create']);
Route::resource('books',  BookController::class);

Route::get('/login',
	    	[LoginController::class, 'index']
			)->name('login-index');

Route::post('/login',
	    	[LoginController::class, 'authenticate']
			)->name('login');

Route::get('/logout',
	    	[LoginController::class, 'logout']
			)->name('logout');

Route::get('/dashboard',
	    	[DashboardController::class, 'index']
			)->middleware('auth')->name('dashboard-index');
