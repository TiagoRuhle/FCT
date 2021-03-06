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

Route::get('/', 'TrabalhoController@index');
    


Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    
});

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('posts', 'PostController');
Route::get('/hobbies', 'AlunoController@hobbies')->name('alunos.hobbies');
Route::get('/perfilprocura', 'AlunoController@perfilprocura')->name('alunos.perfilprocura');
Route::get('/saveperfilprocura', 'AlunoController@saveperfilprocura')->name('alunos.saveperfilprocura');
Route::get('/savehobbie', 'AlunoController@savehobbie')->name('alunos.savehobbie');
Route::resource('users', 'UserController');
Route::resource('alunos', 'AlunoController');
Route::resource('empresas', 'EmpresaController');
Route::resource('escolas', 'EscolaController');
Route::get('/sendemail', 'PostController@sendemail')->name('trabalhos.sendemail');
Route::resource('trabalhos', 'TrabalhoController');