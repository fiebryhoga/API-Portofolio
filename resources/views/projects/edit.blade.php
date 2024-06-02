@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Edit Project</h1>
    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $project->nama }}" required>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="text" name="gambar" class="form-control" value="{{ $project->gambar }}" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required>{{ $project->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input type="text" name="link" class="form-control" value="{{ $project->link }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
