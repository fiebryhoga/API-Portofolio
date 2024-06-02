@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Blog Content Details</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $content->id }}</td>
        </tr>
        <tr>
            <th>Blog ID</th>
            <td>{{ $content->blog_id }}</td>
        </tr>
        <tr>
            <th>Judul Sub</th>
            <td>{{ $content->judulsub }}</td>
        </tr>
        <tr>
            <th>Materi</th>
            <td>{{ $content->materi }}</td>
        </tr>
    </table>
    <a href="{{ route('blogContents.index') }}" class="btn btn-primary">Back to List</a>
</div>
@endsection
