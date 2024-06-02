@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Edit Reference Content</h1>
    <form action="{{ route('referenceContents.update', $content->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="reference_id">Reference ID</label>
            <input type="number" name="reference_id" class="form-control" value="{{ $content->reference_id }}" required>
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $content->title }}" required>
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input type="url" name="link" class="form-control" value="{{ $content->link }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
