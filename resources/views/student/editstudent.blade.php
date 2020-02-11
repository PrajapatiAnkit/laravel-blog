@extends('student.layouts.master2')
@section('title','Edit Student')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color:white">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Student</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-8 offset-sm-2">

            <form action="{{route('updateStudent')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="firstname">Firstname:</label>
                    <input type="text" name = "firstname" id = "firstname" value="{{$studentDetail->firstName}}" class="form-control" >
                    <div style="color: red;font-size: 12px;">{{ $errors->first('firstname') }}</div>
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname:</label>
                    <input type="text" name = "lastname" id = "lastname" value="{{$studentDetail->lastName}}" class="form-control" >
                    <div style="color: red;font-size: 12px;">{{ $errors->first('lastname') }}</div>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="text" name = "phone" id = "phone" maxlength="10" value="{{$studentDetail->phone}}" class="form-control" >
                    <div style="color: red;font-size: 12px;">{{ $errors->first('phone') }}</div>
                </div>
                <div class="form-group">
                    <label for="department">Department:</label>
                    <input type="text" name = "department" id = "department" value="{{$studentDetail->department}}" class="form-control" >
                    <div style="color: red;font-size: 12px;">{{ $errors->first('department') }}</div>
                </div>
                <input type="hidden" name="editId" id="editId" value="{{Request::segment(2)}}"/>
                <button type = "submit" name="submitBtn" id="submitBtn" class = "btn btn-success">Update <i class="fa fa-check-square-o" aria-hidden="true"></i>
                </button>
            </form>
        </div>
    </div>
@endsection

