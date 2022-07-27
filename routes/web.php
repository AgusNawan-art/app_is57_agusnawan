<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\jenis_pelangganController;

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
    return view('home');
})->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/pelanggan', [pelangganController::class, 'index']);


Route::get('/jenis_pelanggan', [jenis_pelangganController::class, 'index']);
Route::get('/jenis_pelanggan/form', [jenis_pelangganController::class, 'create']);
Route::post('/jenis_pelanggan/store', [jenis_pelangganController::class, 'store']);
Route::get('/jenis_pelanggan/edit/{id}', [jenis_pelangganController::class, 'edit']);
Route::put('/jenis_pelanggan/{id}', [jenis_pelangganController::class, 'update']);
Route::delete('/jenis_pelanggan/{id}', [jenis_pelangganController::class, 'destroy']);


Route::get('/pelanggan', [pelangganController::class, 'index']);
Route::get('/pelanggan/form', [pelangganController::class, 'create']);
Route::post('/pelanggan/store', [pelangganController::class, 'store']);
Route::get('/pelanggan/edit/{id}', [pelangganController::class, 'edit']);
Route::put('/pelanggan/{id}', [pelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [pelangganController::class, 'destroy']);