@extends('student.layouts.master2')
@section('title','Error Logs')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color:white">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Error Logs</li>
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
                    <th>File Name</th>
                    <th>Action</th>
                </tr>
                @foreach($errorLogFiles as $key=> $file)
                    <tr>
                        <td>{{$key}}</td>
                        <td>{{$file}}</td>
                        <td><a href="{{route('downloadLogs',['logLink'=>($file)])}}" class="btn btn-info btn-sm">Download <i class="fa fa-download"></i></a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
