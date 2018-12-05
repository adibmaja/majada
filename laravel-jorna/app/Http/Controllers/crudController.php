<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;
use  App\Student;

class crudController extends Controller


{

	  public function welcome()
    {
        return view('welcome');
    }

    public function create(){
    	return view('crud.create');
    }

    public function index(){
    	 $student = Student::all();
    	return view('crud.index',compact('student'));
    }

    public function store(Request $request){
    	//dd($request->all());
 
    		 $validator = Validator::make($request->all(), [

    		'student_name'        =>'required',
    		'stedent_email'       =>'required',
    		'password'            =>'required',
    		'dob'                 =>'required',
    	 	'phone'               =>'required',
    		
             'biodata'             =>'required',
    		
    		'group'               =>'required',
    		'gender'              =>'required'
    	// 	'subject'             =>'required'  		
    		

    	 ]);

    	   if($validator->fails()) {
             return redirect('create')
                 ->withErrors($validator)
                ->withInput();
         } else {

        $student                      = new Student;
        $student->student_name        =$request->student_name;
        $student->student_email       =$request->student_email;
        $student ->password           =$request->password;
        $student->dob                 =$request->dob;
        $student->phone               =$request->phone;
       
        $student->biodata             =$request->biodata;
      
        $student->group               =$request->group;
        $student->gender              =$request->gender;
        // $student->subject             =$request->subject;
        $student->save();



      Session::flash('message', 'Inserted Successfully!'); 
            return redirect('/view');



    }
}

}