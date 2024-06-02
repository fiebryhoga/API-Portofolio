@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Project Details</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $project->id }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $project->nama }}</td>
        </tr>
        <tr>
            <th>Gambar</th>
            <td><img src="{{ asset($project->gambar) }}" alt="{{ $project->nama }}" width="100"></td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $project->deskripsi }}</td>
        </tr>
        <tr>
            <th>Link</th>
            <td>{{ $project->link }}</td>
        </tr>
    </table>
    <a href="{{ route('projects.index') }}" class="btn btn-primary">Back to List</a>
</div>
@endsection
