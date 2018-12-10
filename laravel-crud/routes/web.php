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


Route::get('/welcome','crudController@welcome')->name('welcome');
Route::get('/view','crudController@index')->name('index');
Route::get('/create','crudController@create')->name('create');
Route::post('/store','crudController@store')->name('store');
Route::post('/update','crudController@update')->name('update');
Route::get('/Studentedit/{id}','crudController@StudenteditMethod')->name('Studentedit');
Route::get('/Studentdelete/{id}','crudController@Studentdelete')->name('Studentdelete');
