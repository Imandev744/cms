@extends('layouts.interface')


@section('container')


    <div class="container" style="margin-top: 50px">
        <h2> All the users</h2>
        <table class="table"  style="text-align: center">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Register AT</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            @foreach($all as $user)



                <tr >
                    <td> {{$user->id}}</td>
                    <td> {{$user->name}}</td>

                    <td>{{$user->email}}</td>

                    <td>{{$user->mobile}}</td>

                    <td>{{$user->created_at}}</td>


                    <td>
                        @if($user->role == 'client')
                            <a href="{{route('admin.user.show',$user)}}" class="btn btn-success">Show</a>
                            <a  class="btn btn-danger">Delete</a>
                            <a  class="btn btn-warning">Disable</a>
                        @endif
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>




    {{--                    <td> @foreach($post->tags as $tag)--}}
    {{--                            {{$tag->title}}--}}
    {{--                        @endforeach--}}
    {{--                    </td>--}}

    {{--                    <td> @foreach($post->categories as $category)--}}
    {{--                            {{$category->title}}--}}
    {{--                        @endforeach--}}
    {{--                    </td>--}}




@endsection
