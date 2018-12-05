<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;
use App\Student;
use App\Subject;
use DB;
use File;

class crudController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function index()
    {
        $student = Student::all();
        return view('crud.index',compact('student'));
    }

    public function create()
    {
        return view('crud.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'student_name'		=> 'required',
            'student_email'		=> 'required|email|unique:students',
            'password'			=> 'required|confirmed|min:3|max:5',
            'dob'				=> 'required|date_format:Y-m-d',
            'phone'             => 'required',
            'photo'             => 'mimes:jpg,jpeg,png|required',
           'biodata'			=> 'required',
           'biodata_file'		=> 'required|max:10240',
           'group'				=> 'required',
           'gender'             => 'required',
           'subject'            => 'required'

        ]);
        if($validator->fails()) {
            return redirect('create')
                ->withErrors($validator)
                ->withInput();
        } else {

            if($request->hasFile('photo')) {
                $org_file = $_FILES['photo']['name'];
                // file re name
                $enc_image = time().time() . '.' . $org_file;
                // Image upload method
                move_uploaded_file($_FILES['photo']['tmp_name'], "omar/img/" . $enc_image);
            }

            $student                        = new Student;
            $student->student_name          = $request->student_name;
            $student->student_email         = $request->student_email;
            $student->password              = $request->password;
            $student->dob                   = $request->dob;
            $student->phone                 = $request->phone;
            if($enc_image != ""){
                $student->photo             = $enc_image;
            }
            $student->biodata               = $request->biodata;
            $student->biodata_file          = $_FILES['biodata_file']['name'];
            $student->group                 = $request->group;
            $student->gender                = $request->gender;
            $student->save();

            $student_id = $student->id;

            for ($i=0; $i <= count($request->subject)-1 ; $i++) { 
               $subject                 = new Subject;
               $subject->student_id     = $student_id;
               $subject->subject        = $request->subject[$i];
               $subject->save();
            }
            Session::flash('message', 'Inserted Successfully!'); 
            return redirect('view');
        }

    }

    public function StudenteditMethod($id){
        $student = Student::where('id',$id)->get();
        $subject = Subject::where('student_id',$id)->select('subject')->get();
        return view('crud.studentedit',compact('student','subject'));
    }

    public function update(Request $request){
        //dd($request->all());
        DB::table('students')
            ->where('id', $request->old_id)
            ->update(['student_name'    => $request->student_name, 
                      'student_email'   => $request->student_email,
                      'password'        => $request->password,
                      'dob'             => $request->dob,
                      'phone'           => $request->phone,
                      'photo'           => $request->photo,
                      'biodata'         => $request->biodata,
                      'biodata_file'    => $request->biodata_file,
                      'group'           => $request->group,
                      'gender'          => $request->gender,
                    ]);
        if($request->hasFile('photo')) {
                $org_file = $_FILES['photo']['name'];
                // file re name
                $enc_image = time().time() . '.' . $org_file;
                // Image upload method
                move_uploaded_file($_FILES['photo']['tmp_name'], "omar/img/" . $enc_image);
            }
          if(File::exists(public_path('omar/img/'.$request->old_photo))){

            File::delete(public_path('omar/img/'.$request->old_photo));

          }else{
            echo "file not found";
          }
        
    }

    public function Studentdelete($id){
        $res=Student::where('id',$id)->delete();
        return redirect('/view');
    }

}
