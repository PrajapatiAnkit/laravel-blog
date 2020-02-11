@extends('student.layouts.master2')
@section('title','Add Student')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color:white">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Student</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-8 offset-sm-2">
            <form action="{{route('saveStudent')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="firstname">Firstname <span class="field-required">*</span></label>
                    <input type="text" name = "firstname" id = "firstname" value="{{old('firstname')}}" class="form-control" placeholder="First Name" >
                    <div style="color: red;font-size: 12px;">{{ $errors->first('firstname') }}</div>
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname <span class="field-required">*</span></label>
                    <input type="text" name = "lastname" id = "lastname" value="{{old('lastname')}}" class="form-control" placeholder="Last Name" >
                    <div style="color: red;font-size: 12px;">{{ $errors->first('lastname') }}</div>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number <span class="field-required">*</span></label>
                    <input type="text" name = "phone" id = "phone" maxlength="10" value="{{old('phone')}}" class="form-control" placeholder="Phone Number" >
                    <div style="color: red;font-size: 12px;">{{ $errors->first('phone') }}</div>
                </div>
                <div class="form-group">
                    <label for="department">Department <span class="field-required">*</span></label>
                    <input type="text" name = "department" id = "department" value="{{old('department')}}" class="form-control" placeholder="Department" >
                    <div style="color: red;font-size: 12px;">{{ $errors->first('department') }}</div>
                </div>

                <button type = "submit" name="submitBtn" id="submitBtn" class = "btn btn-success">Save <i class="fa fa-check-square-o" aria-hidden="true"></i>
                </button>
            </form>
        </div>
    </div>
@endsection

