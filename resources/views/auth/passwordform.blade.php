@extends('layouts.interface')

@section('container')

    <div class="container mt-5" >
        <h2>Form authentication</h2>
        <form action="{{route('login.pass.check')}}" method="post">
            @csrf


            <div class="form-group">
                <label for="mobile">password:</label>
                <input type="password" class="form-control"  placeholder="Enter  password :" name="password" >

                @error('mobile')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection


