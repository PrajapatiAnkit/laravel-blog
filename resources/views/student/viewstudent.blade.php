@extends('student.layouts.master')
@section('title','View Student')
@section('content')
    <div class="row">
        <div class="col-sm-12"><br/><br/>
            <center>Student List</center>
            @if(Session::has('message'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
            @endif
            <table class="table">
                <tr>
                    <th>Sr.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Department</th>
                    <th>Phone No.</th>
                </tr>
               @foreach($studentList as $sr=> $student)
                    <tr class = "text-center">
                        <td>{{ $sr+1 }}</td>
                        <td>{{ $student->firstName }}</td>
                        <td>{{ $student->lastName }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->department }}</td>
                        <td><a href="{{route('editStudent',['id'=>$student->id])}}" class = "btn btn-info">Edit</a></td>
                        <td><a href="{{route('deleteStudent',['id'=>$student->id])}}" class = "btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
