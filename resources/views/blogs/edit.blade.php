@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Edit Blog</h1>
    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="penulis">Author</label>
            <input type="text" name="penulis" class="form-control" value="{{ $blog->penulis }}" required>
        </div>
        <div class="form-group">
            <label for="tanggal">Date</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $blog->tanggal }}" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="judul">Title</label>
            <input type="text" name="judul" class="form-control" value="{{ $blog->judul }}" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Description</label>
            <textarea name="deskripsi" class="form-control" required>{{ $blog->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
