@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Reference Content Details</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $content->id }}</td>
        </tr>
        <tr>
            <th>Reference ID</th>
            <td>{{ $content->reference_id }}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{ $content->title }}</td>
        </tr>
        <tr>
            <th>Link</th>
            <td><a href="{{ $content->link }}" target="_blank">{{ $content->link }}</a></td>
        </tr>
    </table>
    <a href="{{ route('referenceContents.index') }}" class="btn btn-primary">Back to List</a>
</div>
@endsection
