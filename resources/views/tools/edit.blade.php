@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Edit Tool</h1>
    <form action="{{ route('tools.update', $tool->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $tool->nama }}" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
            <small>Current Image: <img src="{{ $tool->image }}" alt="{{ $tool->nama }}" width="100"></small>
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input type="url" name="link" class="form-control" value="{{ $tool->link }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
