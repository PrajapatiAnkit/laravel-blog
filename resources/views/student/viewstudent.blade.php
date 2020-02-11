@extends('student.layouts.master2')
@section('title','View Student')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color:white">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Student</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12"><br/><br/>
            @if($message = Session::get('success'))
            <div class="alert alert-success-2" role="alert">
                <i class="fa fa-check"></i> {{$message}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <table class="table table-bordered table-striped table-condenced">
                <tr>
                    <th>Sr.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Department</th>
                    <th>Phone No.</th>
                    <th>Action</th>
                </tr>
               @foreach($studentList as $sr=> $student)
                    <tr>
                        <td>{{ $sr+1 }}</td>
                        <td>{{ $student->firstName }}</td>
                        <td>{{ $student->lastName }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->department }}</td>
                        <td><a href="{{route('editStudent',['id'=>$student->id])}}" class = "btn btn-info btn-sm">Edit <i class="fa fa-pencil-square-o"></i></a>
                        <a href="javaScript:void(0);" onclick='deleteStudent("{{route('deleteStudent',['id'=>$student->id])}}");' class = "btn btn-danger btn-sm">Delete <i class="fa fa-trash-o"></i></a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
