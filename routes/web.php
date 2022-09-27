<?php

use Illuminate\Support\Facades\Route;
//Postモデルを使う宣言
use App\Post;
// use Auth;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'TaskController@index')->name('tasks.index');

Route::post('/index','TaskController@store')->name('tasks.store');

Route::get('/index/{id}/edit', 'TaskController@edit')->name('tasks.edit');

Route::delete('/index/{id}', 'TaskController@destroy')->name('tasks.destroy');