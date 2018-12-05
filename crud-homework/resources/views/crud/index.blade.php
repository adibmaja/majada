@extends('layout.master')

@section('content')

<?php// dd($student_view_data); ?>
    <div class="row">
         
            <div class="panel panel-primary" style="width: 1050px; margin-right: 10px; ">
                <div class="panel-heading">
                    <div style="overflow: hidden">
                         @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{session()->get('message')}}
                            </div>
                         @endif
                         <div class="row">
                            <div class="col-md-6"><span class='glyphicon glyphicon-user'></span> Student List</div>
                            <div class="col-md-6 text-right"><a href="{{route('insert')}}"><span class='glyphicon glyphicon-plus'></span> Add New</a></div>
                        </div>
                    </div>
                </div>
                
                <div class="panel-body row">
                    <div class="col-md-12">
                    <table class="table table-bordered table-striped table-hover" style="width: 950">
                        <thead>
                            <tr><td colspan="10"><h2 align="center"><b>Student's Information</b></h2></td></tr>
                            <tr>
                                <th>student_name</th>
                                <th>student_email</th>
                                <th>password</th>
                                <th>dob</th>
                                <th>phone</th>
                                <th>photo</th>
                                <th>biodata</th>
                                <th>biodata_file</th>
                                <th>group</th>
                                <th>gender</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($student_view_data as $student)
                                <tr>
                                    <td>{{$student->student_name}}</td>
                                    <td>{{$student->student_email}}</td>
                                    <td>{{$student->password}}</td>
                                    <td>{{$student->dob}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td><img src="{{asset('images/' .$student->photo) }}" width="30px"></td>
                                    <td>{{$student->biodata}}</td>
                                    <td>{{$student->biodata_file}}</td>
                                    <td> 
                                        @if($student->group ==1)
                                            {{"Science"}}
                                            @elseif($student->group ==2)
                                            {{"Arts"}}
                                            @else{{"Humanities"}}
                                        @endif
                                    </td>
                                    <td> 
                                        @if($student->gender ==1)
                                            {{"Male"}}
                                            @else{{"Female"}}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                 </div>

                    <select>
                        
                    </select>

                </div>

            </div>
       
    </div>

@endsection