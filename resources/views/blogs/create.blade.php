@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Create Blog</h1>
    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="penulis">Author</label>
            <input type="text" name="penulis" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tanggal">Date</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="judul">Title</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Description</label>
            <textarea name="deskripsi" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
