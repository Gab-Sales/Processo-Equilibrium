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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login','App\Http\Controllers\autenticacao@login');

Route::get('/home', function () {
    return View::make('administrador/index');
});

Route::get('/funcionarios', function () {
    return View::make('administrador/funcionariosGrid');
});