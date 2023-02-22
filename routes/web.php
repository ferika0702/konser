<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenontonController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DashboardController;
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

Route::get('/dashboard', function () {
    return view('layout.main');
});

//penonton
// Route::get('/penonton/index', function () {
//     return view('penonton.index');
// });
Route::resource('/penonton',PenontonController::class);

Route::get('/dashboard/index', function () {
    return view('dashboard.index');
});
Route::get('/dashboard/login', function () {
    return view('login.index');
});
// Route::get('/penonton/selesai/{id}', [PenontonController::class, 'selesai'])->name('selesai');
// Route::get('/penonton/selesai',ReportController::class);
