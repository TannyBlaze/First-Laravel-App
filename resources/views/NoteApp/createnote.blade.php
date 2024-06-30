@extends('NoteApp.index')

@section('content')

<div class="container">
    <div class="rounded text-center">
        <div class="col-sm-12 col-md-8 col-lg-5 shadow p-5 rounded-5 mx-auto">
            <form action="/noteApp_process" method="post" enctype="multipart/form-data">
                @csrf
                <h4>CREATE TODO</h4>
                <div class="col-sm-12">
                    <input type="text" name="title" class="form-control mb-3" placeholder="Title">
                </div>
                <div class="col-sm-12">
                    <input type="file" name="image">
                </div>
                <textarea type="text" name="content" class="form-control mb-3 col-sm-12" placeholder="Content"></textarea>
                <div>
                    <button type="submit" class="btn btn-primary w-100">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection