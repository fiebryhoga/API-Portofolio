@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Edit Blog Content</h1>
    <form action="{{ route('blogContents.update', $content->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="blog_id">Blog ID</label>
            <input type="number" name="blog_id" class="form-control" value="{{ $content->blog_id }}" required>
        </div>
        <div class="form-group">
            <label for="judulsub">Judul Sub</label>
            <input type="text" name="judulsub" class="form-control" value="{{ $content->judulsub }}" required>
        </div>
        <div class="form-group">
            <label for="materi">Materi</label>
            <textarea name="materi" class="form-control" required>{{ $content->materi }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
