@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Blog Contents</h1>
    <a href="{{ route('blogContents.create') }}" class="btn btn-primary">Add Blog Content</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Blog ID</th>
                <th>Judul Sub</th>
                <th>Materi</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogContents ?? '' as $content)
                <tr>
                    <td>{{ $content->id }}</td>
                    <td>{{ $content->blog_id }}</td>
                    <td>{{ $content->judulsub }}</td>
                    <td>{{ $content->materi }}</td>
                    <td>
                        <a href="{{ route('blogContents.show', $content->id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('blogContents.edit', $content->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('blogContents.destroy', $content->id) }}" method="POST" style="display:inline;">
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
