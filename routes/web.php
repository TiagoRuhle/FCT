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

Route::get('/', 'PostController@index');
    


Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    
});

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('posts', 'PostController');
Route::get('/indexpessoal', 'PostController@indexpessoal')->name('posts.indexpessoal');
Route::resource('users', 'UserController');
Route::resource('alunos', 'AlunoController');
Route::resource('empresas', 'EmpresaController');
Route::resource('escolas', 'EscolaController');
Route::get('/sendemail', 'PostController@sendemail')->name('posts.sendemail');