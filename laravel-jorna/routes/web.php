<?php


use Illuminate\Http\Request;
Route::get('cheek',function(Request $request){
	$data = $request->new_id;
	$feedback = [
		'status'=> 'success',
		'message' =>'thanks for feedback'
	];
	echo json_encode($feeback);


});

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

Route::get('/create','crudController@create')->name('create');

Route::get('/view','crudController@index')->name('index');
Route::post('store','crudController@store')->name('store');
	
	