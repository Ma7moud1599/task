@extends('layouts.app')

@section('content')
    <form action="{{ route('Albums.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">Album Name</label>
            <input class="form-control" name="name" type="text" id="formFile">
        </div>
        <button type="submit" class="btn btn-success text-green-600">Add Album</button>
    </form>
@endsection
