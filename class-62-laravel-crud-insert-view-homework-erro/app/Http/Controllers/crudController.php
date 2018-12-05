<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;
use App\Student;

class crudController extends Controller
{
    public function insert(){
    	return view('crud/create');
    }
    public function view(){
    		$student_view_data = Student::all();
    	return view('crud/index',compact('student_view_data'));
    }
    public function valueInsert(Request $request){
    	 //dd($request->all());
    		$validator = Validator::make($request->all(),[
    			  'add_product'	=> 'required',
    			  'invoice'	=> 'required',
    			  'requisition_qty'	=> 'required',
    			  'price'	=> 'required',
    			  'description'	=> 'required|max:11', 
    			  'vat'	=> 'required',
    			'tax'	=> 'required',
    			'ait'	=>"required", 
    			'discount'	=> 'required',
    			'net_payable'	=> 'required',
    			'add_supplier'	=> 'required',
                'due'  => 'required',
                     			
    			
    		]);

    		if($validator->fails()){
    			return redirect('insert')
    				  ->withErrors($validator)
    				  ->withInput();
    			}
    			else{
    				$student = new Student;
    				$student->student_name 		= $request->add_product;
    				$student->student_email 	= $request->invoice;
    				$student->password 			= $request->requisition_qty;
    				$student->dob 				= $request->price;
    				$student->phone 			= $request->description;
    				$student->photo 			= $request->net_payable; 
    				 
    				$student->biodata 			= $request->vat;
    				 $student->biodata_file          = $request->discount;
    				$student->group 			= $request->tax;
    				$student->gender 			= $request->ait;
                    //$student->gender            = $request->discount;
                    //$student->gender            = $request->net_payable;
                    //$student->gender            = $request->add_supplier;
                    // $student->gender            = $request->add_supplier;
    				 //$student->subject 		= $request->subject;
    				 $student->save();
    				 Session::Flash('message','Inserted Successfully!');
    				 return redirect('view');
    			    }
    		
    }
}
