<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\TelegramController;

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
 return redirect()->route('dashboard.index');
});

Route::get('test-bot', [TelegramController::class, 'testBot'])->name('test.bot');

// DASHBOARD
Route::resource('dashboard', DashboardController::class);

// USER
Route::resource('user', UserController::class);

// Gejala
Route::resource('gejala', GejalaController::class);

// Penyakit
Route::resource('penyakit', PenyakitController::class);

// Manual Diagnosa
Route::resource('diagnosa', DiagnosaController::class);

// record Diagnosa
Route::get('record-diagnosa', [DiagnosaController::class, 'recordDiagnosa'])->name('record.index');

