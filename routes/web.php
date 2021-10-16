<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\TokoController;
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
