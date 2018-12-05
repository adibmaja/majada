@extends('layout.master')

@section('content')

<?php// dd($subject); ?>
    <div class="row">
        <div class="panel panel-primary">
           <div class="panel-heading">
               <div style="overflow: hidden">
                   <div class="col-md-6"><span class='glyphicon glyphicon-flash'></span> Student Edit Form</div>
                   <div class="col-md-6 text-right"><a href="{{ route('index') }}"><span class='glyphicon glyphicon-user'></span> Student List </a></div>
                </div>
           </div>
           <div class="panel-body">
            <form class="form-horizontal" action="{{ route('update') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    @if($errors->has('student_name'))

                    <div class="alert alert-danger">{{ $errors->first('student_name') }}</div>
                        
                    @endif

                    @if($errors->has('student_email'))

                    <div class="alert alert-danger">{{ $errors->first('student_email') }}</div>
                        
                    @endif

                    @if($errors->has('password'))

                    <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                        
                    @endif

                    @if($errors->has('dob'))

                    <div class="alert alert-danger">{{ $errors->first('dob') }}</div>
                        
                    @endif

                    @if($errors->has('phone'))

                    <div class="alert alert-danger">{{ $errors->first('phone') }}</div>
                        
                    @endif

                    @if($errors->has('photo'))

                    <div class="alert alert-danger">{{ $errors->first('photo') }}</div>
                        
                    @endif

                    @if($errors->has('biodata'))

                    <div class="alert alert-danger">{{ $errors->first('biodata') }}</div>
                        
                    @endif

                    @if($errors->has('biodata_file'))

                    <div class="alert alert-danger">{{ $errors->first('biodata_file') }}</div>
                        
                    @endif

                    @if($errors->has('group'))

                    <div class="alert alert-danger">{{ $errors->first('group') }}</div>
                        
                    @endif

                    @if($errors->has('gender'))

                    <div class="alert alert-danger">{{ $errors->first('gender') }}</div>
                        
                    @endif

                    @if($errors->has('subject'))

                    <div class="alert alert-danger">{{ $errors->first('subject') }}</div>
                        
                    @endif

                    <label class="control-label col-sm-2" for="student_name">Student Name:</label>

                    @foreach($student as $students)
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="student_name" placeholder="Student Name" name="student_name" value="{{ $students->student_name }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="student_email">Student Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="student_email" placeholder="Enter Email Address" name="student_email" value="{{ $students->student_email }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="password">Student Password: </label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" placeholder="Student Password" name="password" value="{{ $students->password }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="confirmed">Confirm Password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="confirmed" placeholder="Confirm Password" name="password_confirmation" value="{{ $students->password }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="dob">Date of Birth</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="dob" placeholder="Date of Birth" name="dob" value="{{ $students->dob }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="phone">Phone No:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="phone" placeholder="Phone no" name="phone" value="{{ $students->phone }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="photo">Photo:</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="photo" placeholder="Photo" name="photo">
                         <input type="hidden" name="old_photo" value="{{ $students->photo }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="biodata">Biodata Details:</label>
                    <div class="col-sm-10">
                        <textarea name="biodata" id="biodata" cols="30" rows="3" class="form-control">{{ $students->biodata }}"</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="biodata_file">Biodata File:</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="biodata_file" placeholder="Biodata File" name="biodata_file">
                        {{ $students->biodata_file }}
                        <input type="hidden" name="old_biofile" value="{{ $students->biodata_file }}">
                        <input type="hidden" name="old_id" value="{{ $students->id }}">
                    </div>
                </div>
                <?php //dd($students->group); ?>
                <div class="form-group">
                    <label class="control-label col-sm-2">Group:</label>
                    <div class="col-sm-10">
                        <select name="group" class="form-control">
                            <option value="">Select a group</option>
                            <option value="sc" 
                            @if($students->group == "sc")
                            {{ "selected" }}
                            @endif>Science</option>
                            <option value="arts"
                            @if($students->group == "arts")
                            {{ "selected" }}
                            @endif
                            >Arts</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2">Gender:</label>
                    <div class="col-sm-10">
                        <input type="radio" value="1" name="gender" 
                        @if($students->gender == "1")
                            {{ "checked" }}
                         @endif> Male
                        <input type="radio" value="0" name="gender"
                        @if($students->gender == "0")
                            {{ "checked" }}
                         @endif
                        > Female
                    </div>
                </div>
                    <?php $subjectList = [] ?>
                    @foreach($subject as $subjects)
                       <?php $subjectList[] = $subjects->subject; ?>
                    @endforeach
                <div class="form-group">

                    <label class="control-label col-sm-2">Subject:</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="subject[]" value="english"
                        @if(in_array("english", $subjectList))
                            {{ "checked" }}
                        @endif
                        > English
                        <input type="checkbox" name="subject[]" value="math"
                        @if(in_array("math", $subjectList))
                            {{ "checked" }}
                        @endif
                        > Math
                        <input type="checkbox" name="subject[]" value="bangla"
                        @if(in_array("bangla", $subjectList))
                            {{ "checked" }}
                        @endif
                        > Bangla
                        <input type="checkbox" name="subject[]" value="sports"
                        @if(in_array("sports", $subjectList))
                            {{ "checked" }}
                        @endif
                        > Sports
                    </div>

                </div>

                @endforeach

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success"> <span class="glyphicon glyphicon-plus"></span> Update</button>
                        <button type="reset" class="btn btn-danger"> <span class="glyphicon glyphicon-refresh"></span> Clear</button>
                    </div>
                </div>
            </form>
           </div>
        </div>
    </div>
@endsection