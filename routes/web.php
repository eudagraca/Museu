<?php

use App\Http\Controllers\MuseuController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'initial'])->name('initial');;
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Route::get('/historias', [App\Http\Controllers\HistoriaController::class, 'indexUser'])->name('historia.user');
Route::get('/historia-edm', [App\Http\Controllers\LinhaTempoController::class, 'historia'])->name('historia.edm');
Route::get('/linha_do_tempo', [App\Http\Controllers\LinhaTempoController::class, 'linhaDoTempo'])->name('linha_do_tempo');
Route::get('/personalidades', [App\Http\Controllers\LinhaTempoController::class, 'personalidades']);

Route::resource('galeria', App\Http\Controllers\GaleriaController::class);
Route::resource('destaque', App\Http\Controllers\DestaqueController::class);
Route::resource('historia', App\Http\Controllers\HistoriaController::class);
Route::resource('pagina', App\Http\Controllers\PaginaController::class);
Route::get('contacto', [App\Http\Controllers\PaginaController::class, 'contacto'])->name('contacto');
Route::resource('museu', App\Http\Controllers\MuseuController::class);
Route::resource('infraestrutura', App\Http\Controllers\InfraestruturaController::class);
Route::resource('evolucao', App\Http\Controllers\EvolucaoController::class);
Route::get('apresentacao/{apresentacao}', [MuseuController::class, 'apresentacao'])->name('apresentacao.display');
Route::get('apresentacao/', [MuseuController::class, 'edm'])->name('apresentacao');
Route::resource('institucional', App\Http\Controllers\InformacaoInstituicionalController::class);
Route::resource('rede', App\Http\Controllers\RedeController::class);


//Historia da eletrificacao
Route::get('eletrificacao/geracao', [App\Http\Controllers\HistoriaController::class, 'historiaElectGeracao'])->name('eletrificacao.geracao');
Route::get('eletrificacao/transporte', [App\Http\Controllers\HistoriaController::class, 'historiaElectTransporte'])->name('eletrificacao.transporte');
Route::get('eletrificacao/distribuicao', [App\Http\Controllers\HistoriaController::class, 'historiaElectDistribuicao'])->name('eletrificacao.distribuicao');
