<?php

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

Route::get('/', function () {return view('welcome');});

// Funções de login
Route::post('/login','App\Http\Controllers\autenticacao@login');

// Administrador
Route::group(['middleware'=>['auth.login']],function(){
    // Sair
    Route::get('/logout','App\Http\Controllers\autenticacao@logout');

    //Navegação simples
    Route::get('/home', function () {
        return View::make('administrador/index');
    });

    Route::get('/funcionarios','App\Http\Controllers\administrador@getFuncionarios');
    //     return View::make('administrador/funcionariosGrid');
    // });

    Route::get('/inserir','App\Http\Controllers\administrador@inserir');
    
    // Funções Admin
    Route::post('/cadastrar','App\Http\Controllers\administrador@cadastrar');
    Route::get('/delete/{Codigo}','App\Http\Controllers\administrador@excluir');
});
