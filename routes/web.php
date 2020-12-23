<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|->middleware('auth');
*/
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);

Route::post('/logout',[LogoutController::class, 'store'])->name('logout');


Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);


Route::get('/post',[PostController::class, 'index'])->name('posts');
Route::post('/post',[PostController::class, 'store']);

Route::get('/note',[NoteController::class, 'index'])->name('notes');
Route::post('/note',[NoteController::class, 'store']);


Route::get('/', function () {
    return view('home');
})->name('home');
