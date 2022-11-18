@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5 text-lg">{{ $Albums->name }} </h1>
    @foreach ($Images as $Image)
        <img src="{{ asset('images') . '/' . $Image->filename }}" alt="">
    @endforeach
@endsection
