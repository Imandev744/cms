@extends('layouts.interface')

@section('container')


    <div class="container mt-5" >
        <h2>Form authentication</h2>
        <form action="#" >
            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="text" class="form-control"  placeholder="Enter phone number" name="mobile" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection


