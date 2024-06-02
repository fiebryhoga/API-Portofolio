@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Create Reference</h1>
    <form action="{{ route('references.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
