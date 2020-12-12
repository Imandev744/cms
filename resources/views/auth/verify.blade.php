@extends('layouts.interface')



@section('container')
    <div class="container mt-5" >
        <h2>Verification mobile</h2>
        <form action="{{route('auth.verify.mobile')}}" method="post">
            @csrf
                <div class="form-group">
                <label for="code">verification code:</label>
                <input type="text" class="form-control"  placeholder="Enter code :" name="code" required>

                    @if($error=session('error'))

                        <div class="alert-danger">
                            {{$error}}
                        </div>
                    @endif
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>


        </form>
    </div>
@endsection
