<?php

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


Route::get('/jay', 'JayController@dance');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('todo', 'TodoController');

Route::get('/todo/{todo}/mark-as-done', 'TodoController@MarkAsDone');
Route::get('/todo/{todo}/mark-as-undone', 'TodoController@MarkAsUnDone');