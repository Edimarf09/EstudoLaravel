<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SobreNosController;
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

Route::get('/',[MainController::class, 'index'])->name('site.index');

Route::get('/sobre-nos',[SobreNosController::class, 'index'])->name('site.sobrenos');

Route::get('/contato',[ContatoController::class, 'index'])->name('site.contato');

Route::get('/login')->name('site.login');

Route::prefix('/app')->group( function(){
    
    Route::get('/clientes')->name('app.clientes');
    
    Route::get('/fornecedores')->name('app.fornecedores');
    
    Route::get('/produtos')->name('app.produtos');

});

Route::fallback(function() {
    return redirect(route('site.index'));
});

