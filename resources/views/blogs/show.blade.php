@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Blog Details</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $blog->id }}</td>
        </tr>
        <tr>
            <th>Author</th>
            <td>{{ $blog->penulis }}</td>
        </tr>
        <tr>
            <th>Date</th>
            <td>{{ $blog->tanggal }}</td>
        </tr>
        <tr>
            <th>Image</th>
            <td><img src="{{ asset($blog->image) }}" alt="{{ $blog->judul }}" width="100"></td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{ $blog->judul }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ $blog->deskripsi }}</td>
        </tr>
    </table>
    <a href="{{ route('blogs.index') }}" class="btn btn-primary">Back to List</a>
</div>
@endsection
