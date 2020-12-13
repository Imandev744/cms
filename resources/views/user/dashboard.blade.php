@extends('layouts.interface')


@section('container')



<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <h4>welcome {{$user->name}}</h4>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Posts</a></li>
            </ul><br>
            </div>
        </div>

    </div>
</div>











@endsection
