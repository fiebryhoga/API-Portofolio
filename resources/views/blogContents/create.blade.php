@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Create Blog Content</h1>
    <form action="{{ route('blogContents.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="blog_id">Blog ID</label>
            <input type="number" name="blog_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="judulsub">Judul Sub</label>
            <input type="text" name="judulsub" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="materi">Materi</label>
            <textarea name="materi" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
