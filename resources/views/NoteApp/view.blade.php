@extends('Noteapp.index')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 mx-auto p-3 shadow-lg rounded">
            <p class="text-center fw-bold fs-5">{{$note->title}}</p>
            <hr>
            <p class=""><span class="fw-bold"></span>{{$note->content}}</p>
            <div class="row gap-5 mx-auto">
                <a href="/displaynote" class="col">
                    <button class="btn btn-primary"><i class="fas fa-arrow-left-long"></i></button>
                </a>
                <a href="/displaynote/edit/{{$note->note_id}}" class="col">
                    <button class="btn btn-warning"><i class="fas fa-pencil"></i></button>
                </a>
                <a href="/displaynote/delete/{{$note->note_id}}" class="col" onclick="return confirm('Are you sure you want to delete this item')">
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </a>
            </div>

        </div>
    </div>
</div>
@endsection