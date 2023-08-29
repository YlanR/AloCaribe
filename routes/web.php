<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompetidoresController;
use App\Http\Controllers\AcademyController;
use App\Http\Controllers\OperadoresController;
use App\Http\Controllers\PerfilesController;
use App\Http\Controllers\TicketsController;
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
Route::get('/registraCompetidores', [UsuarioController::class, 'index'])->middleware('auth');
Route::post('/recibirdatos', [UsuarioController::class, 'store']);
Route::get('/listaCompetidores', [OperadoresController::class, 'index'])->middleware('auth');
Route::post('/buscar', [OperadoresController::class, 'index'])->middleware('auth');
Route::get('/perfil/{id}', [PerfilesController::class, 'index'])->middleware('auth');
Route::get('/validacionTicket', [TicketsController::class, 'index'])->middleware('auth');
Route::post('/validar/{ids}', [TicketsController::class, 'update'])->middleware('auth');
Route::get('/ticketsValidados', [TicketsController::class, 'indexValidados'])->middleware('auth');
Route::get('/misTickets', [TicketsController::class, 'misTickets'])->middleware('auth');
// Route::resource('/perfil', UsuarioController::class)->middleware('auth');
Route::get('ticket/{id}', [TicketsController::class, 'show'])->name('tickets.pdf')->middleware('auth');
Route::get('/perfilEdit/{id}', [PerfilesController::class, 'edit'])->middleware('auth');
Route::post('/actualizarUsuario/{id}', [PerfilesController::class, 'update'])->middleware('auth');








