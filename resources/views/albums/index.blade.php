@extends('layouts.app')

@section('content')
    <div class="mt-3">
        <a class="btn btn-success" href="{{ route('Albums.create') }}">Add New Album</a>
    </div>
    @if (@isset($Albums) && count($Albums) > 0)
        <table class="table table-bordered table-striped mt-3">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Album Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Control</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Albums as $Album)
                    <tr class="text-center">
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $Album->name }}</td>
                        <td>{{ $Album->created_at }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('Albums.edit', $Album->id) }}">Edit Album</a>
                            <a class="btn btn-danger" href="{{ route('Albums.delete', $Album->id) }}">Delete
                                Album</a>

                            <a class="btn btn-info" href="{{ route('Albums.show', $Album->id) }}">
                                Details</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-danger mt-3 text-center"> Start Add New Album</div>
    @endif
@endsection
