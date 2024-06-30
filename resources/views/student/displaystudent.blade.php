@extends('student.index')

@section('content')
    <div class="container">
        <div class="row shadow p-3 mx-4">
            @foreach($student as $student)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$student->full_name}}</h5>
                        <p class="card-text">{{$student->phone_number}}</p>
                        <div></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection