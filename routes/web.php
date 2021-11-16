<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\LanggananController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

// user CRUD
Route::get('/user', [UserController::class, 'index']);
Route::post('/user', [UserController::class, 'store']);

Route::get('/user/{id}', [UserController::class, 'edit']);
Route::post('/user/{id}', [UserController::class, 'update']);

Route::delete('/user/{id}', [UserController::class, 'destroy']);

// TOKO CRUD
Route::get('/toko', [TokoController::class, 'index']);
Route::post('/toko', [TokoController::class, 'store']);

Route::get('/toko/{id}', [TokoController::class, 'edit']);
Route::post('/toko/{id}', [TokoController::class, 'update']);

Route::delete('/toko/{id}', [TokoController::class, 'destroy']);

// Order CRUD
Route::get('/order', [OrderController::class, 'index']);
Route::post('/order', [OrderController::class, 'store']);

Route::get('/order/{id}', [OrderController::class, 'edit']);
Route::post('/order/{id}', [OrderController::class, 'update']);

Route::delete('/order/{id}', [OrderController::class, 'destroy']);

// status CRUD
Route::get('/status', [StatusController::class, 'index']);
Route::post('/status', [StatusController::class, 'store']);

Route::get('/status/{id}', [StatusController::class, 'edit']);
Route::post('/status/{id}', [StatusController::class, 'update']);

Route::delete('/status/{id}', [StatusController::class, 'destroy']);

// komentar CRUD
Route::get('/komentar', [KomentarController::class, 'index']);
Route::post('/komentar', [KomentarController::class, 'store']);

Route::get('/komentar/{id}', [KomentarController::class, 'edit']);
Route::post('/komentar/{id}', [KomentarController::class, 'update']);

// Langganan CRUD
Route::get('/langganan', [LanggananController::class, 'index']);
Route::post('/langganan', [LanggananController::class, 'store']);

Route::get('/langganan/{id}', [LanggananController::class, 'edit']);
Route::post('/langganan/{id}', [LanggananController::class, 'update']);

Route::delete('/langganan/{id}', [LanggananController::class, 'destroy']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('user');

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin')->middleware('admin');
