@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Create Reference Content</h1>
    <form action="{{ route('referenceContents.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="reference_id">Reference ID</label>
            <input type="number" name="reference_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input type="url" name="link" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
