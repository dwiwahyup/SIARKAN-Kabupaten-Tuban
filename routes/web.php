<?php

use App\Http\Controllers\ArusLantasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JalanController;
use App\Http\Controllers\KecelakaanController;
use App\Models\ArusLantas;
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

Auth::routes();

Route::get('/', function () {
    return view('users.home');
});
// Route::get('/', function () {
//         return view('dashboard');
//     })->middleware('auth');

// route::get('/', [HomeController::class,'index']);


Route::middleware(['auth', 'verified'])->group(function () {
    Route::middleware(['Admin'])->group(function () {
        route::get('dashboard', [DashboardController::class, 'index']);
        Route::resource('jalan', JalanController::class);
        Route::resource('kecelakaan', KecelakaanController::class);
        Route::resource('aruslantas', ArusLantasController::class);
    });
});


route::get('/home', [HomeController::class, 'index']);
