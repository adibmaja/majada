<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class crudController extends Controller
{

    public function form_view(){
        return view('form');
    }
    public function insertForm(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(),[
       'student_name'    =>'required',
       'student_email'    =>'required',
       'password'          =>'required',
        'dob'          =>'required',
        'phone'          =>'required',
        'image'          =>'required',
        'gender'          =>'required'



   ]);

        if($validator->fails()){
            return redirect('form_view')
                ->withErrors($validator)
                ->withInput();
            }else{
                echo "ok";
            }
        }

}


