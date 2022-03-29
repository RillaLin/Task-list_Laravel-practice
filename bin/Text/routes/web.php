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

Route::get('/', 'TasksController@index');  
Route::get('/tasks', 'TasksController@index'); //這兩個網址連結會跳到同一個頁面

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//新建
Route::get('/tasks/create','TasksController@create');

//呼叫執行指令
Route::post('/tasks', 'TasksController@store'); 

//用patch去update request(可傳送id參數指定要更新哪一筆資料)
Route::patch('/tasks/{id}','TasksController@update');

Route::delete('/tasks/{id}','TasksController@delete');
