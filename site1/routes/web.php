<?php

use App\Http\Controllers\TesteController;
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

Route::get('/PaginaInicio', function () {
    return view('PaginaInicio');
});

Route::get('/login', function(){
    return view('login');
})->name('login.url');


Route::get('/PaginaInicial', function(){
    return view('PaginaInicial');
})->name('paginainical.url');

Route::get('/MoviePG', function(){
    return view('MoviePG');
})->name('MoviePG.url');

Route::get('/cadastro', function(){
    return view('cadastro');
})->name('cadastro.url');

Route::get('/confirmemail', function(){
    return view('confirmemail');
})->name('confirmeemail.url');

Route::get('/resetesenha', function(){
    return view('resetesenha');
})->name('resetesenha.url');
// Route::post('/PaginaInicial', [TesteController::class, 'index'])->name('PaginaInicial.post');