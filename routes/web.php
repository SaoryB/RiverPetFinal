<?php

use App\Http\Controllers\AgendasController;
use App\Http\Controllers\NossosperfisController;
use App\Http\Controllers\PlanosController;
use App\Http\Controllers\PublicPerfilController;
use App\Http\Controllers\PublicPlanoController;
use App\Http\Controllers\HorariosController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/welcome', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/plano', [PlanosController::class, 'listar']);
Route::get('/plano/create', [PlanosController::class, 'create'])->name('plano.create');
Route::get('/plano/report',[PlanosController::class, 'showReport']);
Route::get('/nossosperfil/report',[NossosperfisController::class, 'showReport']);
Route::get('/horario/report',[HorariosController::class, 'showReport']);
Route::get('/plano/{plano_id}',[PlanosController::class, 'show'])->name('plano.show');
Route::post('/plano', [PlanosController::class, 'store']);
Route::patch('/plano/{plano_id}', [PlanosController::class, 'update']);
Route::delete('/plano/{plano_id}', [PlanosController::class, 'deletar']);
Route::resource('publicplano', PublicPlanoController::class);
Route::resource('publicperfil', PublicPerfilController::class);
Route::resource('nossosperfil', NossosperfisController::class);
Route::resource('horario', HorariosController::class);
Route::resource('agenda', AgendasController::class);
