@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Edit Project Tag</h1>
    <form action="{{ route('projectTags.update', $tag->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="project_id">Project ID</label>
            <input type="number" name="project_id" class="form-control" value="{{ $tag->project_id }}" required>
        </div>
        <div class="form-group">
            <label for="nameTags">Tag Name</label>
            <input type="text" name="nameTags" class="form-control" value="{{ $tag->nameTags }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
