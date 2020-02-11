@extends('student.layouts.master2')
@section('title','Home')
@section('content')
    <div class="row mt-5">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="mt-4">Dashboard</h1>
            <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
            <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.
                The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> I
                D which will toggle the menu when clicked.</p>
        </div>
    </div>
@endsection

