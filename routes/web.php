<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompradorAdminController;
use App\Http\Controllers\CompradorController;
use App\Http\Controllers\CorretajeAdminController;
use App\Http\Controllers\CorretajeController;
use App\Http\Controllers\DetalleViviendaController;
use App\Http\Controllers\ExtranjeroAdminController;
use App\Http\Controllers\ExtranjeroController;
use App\Http\Controllers\InformacionViviendaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\RemodelacionAdminController;
use App\Http\Controllers\RemodelacionController;
use App\Http\Controllers\Vivienda;
use App\Http\Controllers\ViviendaController;
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

/*
Route::get('/', function () {
    return view('home');
});
*/

Route::get('/other', function(){
    return view('other');
});

Route::get('/corretajes/create', [CorretajeController::class,'create']);
Route::post('/corretajes', [CorretajeController::class,'store']);
Route::get('/AdminCorretajes',[CorretajeAdminController::class,'index']);
Route::get('/AdminCorretajes/{estado}',[CorretajeAdminController::class,'filtrarActivos']);
Route::put('/AdminCorretajes/{id}/actualizarestado',[CorretajeAdminController::class,'actualizarEstado'])->name('AdminCorretajes.actualizarestado');


Route::get('/remodelaciones/create', [RemodelacionController::class,'create']);
Route::post('/remodelaciones', [RemodelacionController::class,'store']);
Route::get('/AdminRemodelaciones',[RemodelacionAdminController::class,'index']);
Route::get('/AdminRemodelaciones/{estado}',[RemodelacionAdminController::class,'filtrarActivos']);
Route::put('/AdminRemodelaciones/{id}/actualizarestado',[RemodelacionAdminController::class,'actualizarEstado'])->name('AdminRemodelaciones.actualizarestado');




Route::get('/AdminCompradores',[CompradorAdminController::class,'index']);


Route::get('/blog', [BlogController::class,'index']);

Route::view('/login','login')->name('login');

route::view('/dashboard',"adminPanel.index")->middleware('auth')->name('dashboard');

route::post('/inicia-sesion',[LoginController::class,'login'])->name('inicia-sesion');
Route::post('/compradores',[CompradorController::class,'store']);
Route::get('/', [PrincipalController::class, 'index']);

Route::get('/viviendas/{id}', [PrincipalController::class, 'show']);

Route::post('/extranjeros', [ExtranjeroController::class,'store']);

Route::get('/AdminExtranjeros', [ExtranjeroAdminController::class,'index']);
Route::get('/AdminExtranjeros/{estado}', [ExtranjeroAdminController::class,'filtrarActivos']);
Route::get('/AdminViviendas', [ViviendaController::class,'index']);
Route::get('/informacionAdicional',[InformacionViviendaController::class,'index']);
Route::get('/DetalleViviendas', [DetalleViviendaController::class,'index']);
Route::post('/AdminViviendas', [ViviendaController::class,'store']);

Route::post('/informacionAdicional',[InformacionViviendaController::class,'store']);