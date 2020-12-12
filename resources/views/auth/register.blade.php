@extends('layouts.interface')


@section('container')

    <div class="container mt-5" >
        <h2>Register User</h2>
        <form action="{{route('auth.register.user.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Enter Name User :</label>
                <input type="text" class="form-control"  placeholder="Enter Name User:" name="name" required>

                <label>Email :</label>
                <input type="text" class="form-control"  placeholder="Enter Email:" name="email" required>

                <label>password :</label>
                <input type="password" class="form-control"  placeholder="Enter Password:" name="password" required>

                <label>password confirm :</label>
                <input type="password" class="form-control"  placeholder="Enter Password again:" name="password_confirmation" required>
             </div>
            <button type="submit" class="btn btn-primary">Submit</button>

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                @endif
        </form>
    </div>


@endsection
