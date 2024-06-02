@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Project Tag Details</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $tag->id }}</td>
        </tr>
        <tr>
            <th>Project ID</th>
            <td>{{ $tag->project_id }}</td>
        </tr>
        <tr>
            <th>Tag Name</th>
            <td>{{ $tag->nameTags }}</td>
        </tr>
    </table>
    <a href="{{ route('projectTags.index') }}" class="btn btn-primary">Back to List</a>
</div>
@endsection
