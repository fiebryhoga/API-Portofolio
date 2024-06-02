@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Tool Details</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $tool->id }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $tool->nama }}</td>
        </tr>
        <tr>
            <th>Image</th>
            <td><img src="{{ $tool->image }}" alt="{{ $tool->nama }}" width="200"></td>
        </tr>
        <tr>
            <th>Link</th>
            <td><a href="{{ $tool->link }}" target="_blank">{{ $tool->link }}</a></td>
        </tr>
    </table>
    <a href="{{ route('tools.index') }}" class="btn btn-primary">Back to List</a>
</div>
@endsection
