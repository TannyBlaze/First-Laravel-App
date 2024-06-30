@extends('student.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sign Up</div>
                <div class="card-body">
                    <form method="post" action="/student">
                        @csrf
                        <div>
                            @if(isset($message))
                                <span>{{$message}}</span>
                            @endif
                        </div>
                        <input type="text" name="full_name" class="form-control" placeholder="Full Name">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <input type="number" name="phone_number" class="form-control" placeholder="Phone Number">
                        <input type="text" name="address" class="form-control" placeholder="Address">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sign Up</div>
                <div class="card-body">
                    <form method="post" action="/student">
                        @csrf
                        <div>