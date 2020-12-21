@extends('layouts.interface')


@section('container')

    <a href="{{route('admin.index')}}" class="btn btn-primary">بازگشت </a>

    <div class="container">
        <h2>User Information</h2>

        <table class="table table-bordered text-center">
            <thead>
            <tr>

                <th>Name</th>
                <th>Role</th>
                <th>Email</th>
                <th>Mobil</th>
                <th>Created_at</th>
                <th>Count of user's posts</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>


                <td>{{$user->name}}</td>
                <td>{{$user->role}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->mobile}}</td>
                <td>{{$user->created_at}}</td>
                <td>  {{$user->count}} </td>
                <td>
                    @if($user->role == 'client')
                        <a  class="btn btn-danger">Delete</a>
                        <a  class="btn btn-warning">Disable</a>
                    @endif
                </td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection
