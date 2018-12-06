<?php


Route::get('/',function(){
	return view('welcome');
});


//Route::match(['get','post'],'/class',function(){
	//return view('welcome');
// });


//Route::('/controller_check','praticeController@methodame1')

Route::get('/class/{param}',function(){
	return view('welcome');
});


Route::get('controller_check/{param}','practiseController@MethodName');

Route::get('controller_check/{param}','practiseController@MethodName')->
where(['param'=>'[0-9]+']);

Route::get('multiple/{data1}/{data2}','practiseController@Methodmulti')->
where(['data1'=>'[0-9]+','data2'=>'[A-Za-z]+']);


Route::prefix('admin')->group(function(){
	Route::get('deshboard','practiseController@MethoddName1');
	Route::get('controller2','practiseController@MethodName2');
});

Route::prefix('user')->group(function(){
	Route::get('deshboard','practiseController@MethoddName1');
	Route::get('controller2','practiseController@MethodName2');
});


Route::namespace('Admin')->group(function(){
	Route::get('deshboard','practiseController@MethoddName1');
	Route::get('controller2','practiseController@MethodName2');
});



Route::grouop(['prefix'=>'coustomer','namespace'=>'coustomer'],function(){
	Route::get('deshboard','practiseController@MethoddName1');
});



	
	
	
}
