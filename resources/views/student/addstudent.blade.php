@extends('student.layouts.master')
@section('title','Add Student')
@section('content')
    <div class="row mt-5">
        <div class="col-sm-8 offset-sm-2">
            <h3>Add Student</h3>
           {{-- @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif--}}
            <form action="{{route('saveStudent')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="firstname">Firstname:</label>
                    <input type="text" name = "firstname" id = "firstname" value="{{old('firstname')}}" class="form-control" >
                    <div style="color: red;font-size: 12px;">{{ $errors->first('firstname') }}</div>
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname:</label>
                    <input type="text" name = "lastname" id = "lastname" value="{{old('lastname')}}" class="form-control" >
                    <div style="color: red;font-size: 12px;">{{ $errors->first('lastname') }}</div>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="text" name = "phone" id = "phone" maxlength="10" value="{{old('phone')}}" class="form-control" >
                    <div style="color: red;font-size: 12px;">{{ $errors->first('phone') }}</div>
                </div>
                <div class="form-group">
                    <label for="department">Department:</label>
                    <input type="text" name = "department" id = "department" value="{{old('department')}}" class="form-control" >
                    <div style="color: red;font-size: 12px;">{{ $errors->first('department') }}</div>
                </div>

                <button type = "submit" name="submitBtn" id="submitBtn" class = "btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection

