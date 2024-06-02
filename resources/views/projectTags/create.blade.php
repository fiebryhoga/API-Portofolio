@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Create Project Tag</h1>
    <form action="{{ route('projectTags.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="project_id">Project ID</label>
            <input type="number" name="project_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nameTags">Tag Name</label>
            <input type="text" name="nameTags" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
