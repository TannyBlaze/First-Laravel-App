@extends('NoteApp.index')
@section('content')
<div class="container">
    <div class="mx-auto text-center">
        @if (Auth::user())
        <table class="table table-control">
            <th>S/N</th>
            <th>Title</th>
            <th>Date</th>
            @foreach($allNotes as $note)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $note->title }}</td>
                <td>{{ $note->created_at }}</td>
                <td class="row">
                    <a href="/displaynote/delete/{{$note->note_id}}" class="nav-link col" onclick="return confirm('Are you sure you want to delete this item')">
                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </a>
                    <a href="/createnote/{{$note->note_id}}" class="nav-link col">
                        <i class="fas fa-arrow-right-long text-primary"></i>
                    </a>
                </td>
            </tr> 
            @endforeach
        </table>
        @else
        <h1>You are currently signed out</h1>
        <a href="/login" class="btn btn-primary">Login</a>
        <a href="/register" class="btn btn-primary">Register</a>
        @endif
    </div>
</div>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
@endsection