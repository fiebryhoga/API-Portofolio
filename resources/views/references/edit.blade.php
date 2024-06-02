@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Edit Reference</h1>
    <form action="{{ route('references.update', $reference->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $reference->title }}" required>
        </div>
        
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
