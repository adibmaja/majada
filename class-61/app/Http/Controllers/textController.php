<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class textController extends Controller
{
    
public function indexmethod(){
	return view('frontend/index');
}


public function  blogmethod(){
	return view('frontend/blog');
}


public function  contractmethod(){
	return view('frontend/contract');
}


public function  profilemethod(){
	return view('frontend/profile');
}

public function servicemethod(){
	return view('frontend/service');
}


}




