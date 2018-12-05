@extends('layout.master')

@section('content')

<?php //dd($student); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div style="overflow: hidden">
                        
                          @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                         @endif
                     <div class="col-md-6"><span class='glyphicon glyphicon-user'></span> Students List</div> 

                     <div class="col-md-6 text-right"><a href="{{ route('create') }}"><span class='glyphicon glyphicon-plus'></span> Add New</a></div>
                    </div>
                </div>
                
                <div class="panel-body">
              <table class="table table-bordered">
                @foreach($student as $students)
                <tr>
                    <td>{{$students->student_name}}</td>
                    <td>{{$students->student_email}}</td>
                    <td>{{$students->dob}}</td>
                    <td>{{$students->phone}}</td>                    
                    <td>{{$students->biodata}}</td>
                    <td>{{$students->group}}</td>
                    <td>
                        @if($students->gender == 1)
                        {{"male"}}
                        @else 
                        {{"female"}}
                        @endif

                    </td>
                @endforeach
            </table>

                    
                </div>

            </div>
        </div>
    </div>

@endsection