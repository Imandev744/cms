@extends('layouts.interface')

@section('container')

{{--    @if ($errors->any())--}}
{{--        @foreach ($errors->all() as $error)--}}
{{--            {{ $error }}--}}
{{--        @endforeach--}}
{{--    @endif--}}

    <div class="container mt-5" >
        <h2>Form authentication</h2>
        <form action="{{route('auth.check.num')}}" method="post">
            @csrf


            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="text" class="form-control"  placeholder="Enter phone number" name="mobile" required>
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


