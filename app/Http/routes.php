<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
//CRUD
Route::get('message/{id}', 'MessagesController@show');
Route::post('message', 'MessagesController@store');
Route::put('message/{id}', 'MessagesController@update');
Route::delete('message/{id}', 'MessagesController@destroy');

//index: show　の補助ページ
Route::get('/', 'MessagesController@index');

Route::resource('messages', 'MessagesController');

// create: 新規作成用のフォームページ
Route::get('messages/create', 'MessagesController@create');

// edit: 更新用のフォームページ
Route::get('messages/{id}/edit', 'MessagesController@edit');
