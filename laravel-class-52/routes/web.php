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

Route::get('controll','practiseController@methodName');
Route::get('controll/{data}','practiseController@methodName1')->where(['data'=>'[0-9]+']);
Route::get('multiple/{data1}/{data2}','practiseController@methodName2')->where(['data1'=>'[0-9]+','data2'=>'[A-Za-z]+']);


