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
Route::get('/registraCompetidores', [UsuarioController::class, 'index'])->middleware('can:usuario.index')->name('usuario.index');
Route::resource('/competidor', UsuarioController::class)->middleware('auth');
Route::get('/academia/{id}', [AcademyController::class, 'show'])->middleware('can:usuario.academy.show')->name('usuario.academy.show');
Route::get('/perfilAcademia/{id}', [AcademyController::class, 'perfilOp'])->middleware('can:usuario.academy.show')->name('usuario.academy.perfil');
Route::resource('/academia', AcademyController::class)->middleware('auth');
Route::post('/recibirdatos', [UsuarioController::class, 'store'])->middleware('can:usuario.store')->name('usuario.store');
Route::get('/listaCompetidores', [OperadoresController::class, 'index'])->middleware('can:operador.index')->name('operador.index');
Route::post('/buscar', [OperadoresController::class, 'index'])->middleware('can:operador.index')->name('operador.index');
Route::get('/perfil/{id}', [PerfilesController::class, 'index'])->middleware('can:perfil.index')->name('perfil.index');
Route::get('/validacionTicket', [TicketsController::class, 'index'])->middleware('can:ticket.index')->name('ticket.index');
Route::post('/validar/{ids}', [TicketsController::class, 'update'])->middleware('can:ticket.update')->name('ticket.update');
Route::get('/ticketsValidados', [TicketsController::class, 'indexValidados'])->middleware('can:ticket.indexValidados')->name('ticket.indexValidados');
Route::get('/misTickets', [TicketsController::class, 'misTickets'])->middleware('can:ticket.misTickets')->name('ticket.misTickets');
// Route::resource('/perfil', UsuarioController::class)->middleware('auth');
Route::get('ticket/{id}', [TicketsController::class, 'show'])->name('tickets.pdf')->middleware('can:ticket.show')->name('ticket.show');
Route::get('/perfilEdit/{id}', [PerfilesController::class, 'edit'])->middleware('can:perfil.edit')->name('perfil.edit');
Route::post('/actualizarUsuario/{id}', [PerfilesController::class, 'update'])->middleware('can:perfil.update')->name('perfil.update');
Route::get('/academyEdit/{id}', [AcademyController::class, 'edit'])->middleware('can:perfil.edit')->name('academy.edit');
Route::post('/actualizarAcademy/{id}', [AcademyController::class, 'update'])->middleware('can:perfil.update')->name('academy.update');
Route::post('/buscarTicket', [TicketsController::class, 'ticketBuscar'])->middleware('can:operador.index')->name('ticket.buscar');
Route::get('/contacto', [HomeController::class, 'contacto'])->name('home.contacto');
Route::post('/contacto', [HomeController::class, 'store'])->name('home.store');









