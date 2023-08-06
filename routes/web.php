<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompetidoresController;
use App\Http\Controllers\AcademyController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/login', [HomeController::class,'index']);
// Route::get('/register', [UsuarioController::class,'register']);

Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('/registraCompetidores', [UsuarioController::class, 'index'])->middleware('auth');
Route::resource('/competidor', UsuarioController::class)->middleware('auth');
Route::get('/academia/{id}', [AcademyController::class, 'show'])->middleware('auth');
Route::resource('/academia', AcademyController::class)->middleware('auth');





