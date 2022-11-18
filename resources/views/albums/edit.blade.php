@extends('layouts.app')

@section('content')
    <form action="{{ route('Albums.update', 'test') }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">Album Name</label>
            <input class="form-control" name="name" type="text" id="formFile" value="{{ $Album->name }}">
            <input type="hidden" value="{{ $Album->id }}" name="id" class="form-control">

        </div>
        <button type="submit" class="btn btn-success text-green-600">Edit Album</button>
    </form>
@endsection
