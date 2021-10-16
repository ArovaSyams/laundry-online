<?php

use App\Http\Controllers\KomentarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StatusController;

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

Route::delete('/komentar/{id}', [KomentarController::class, 'destroy']);


