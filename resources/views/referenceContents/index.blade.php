@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Reference Contents</h1>
    <a href="{{ route('referenceContents.create') }}" class="btn btn-primary">Add Reference Content</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Reference ID</th>
                <th>Title</th>
                <th>Link</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($referenceContents as $content)
                <tr>
                    <td>{{ $content->id }}</td>
                    <td>{{ $content->reference_id }}</td>
                    <td>{{ $content->title }}</td>
                    <td><a href="{{ $content->link }}" target="_blank">{{ $content->link }}</a></td>
                    <td>
                        <a href="{{ route('referenceContents.show', $content->id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('referenceContents.edit', $content->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('referenceContents.destroy', $content->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
