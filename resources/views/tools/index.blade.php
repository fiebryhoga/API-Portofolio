@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Tools</h1>
    <a href="{{ route('tools.create') }}" class="btn btn-primary">Add Tool</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Image</th>
                <th>Link</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tools as $tool)
                <tr>
                    <td>{{ $tool->id }}</td>
                    <td>{{ $tool->nama }}</td>
                    <td><img src="{{ $tool->image }}" alt="{{ $tool->nama }}" width="100"></td>
                    <td><a href="{{ $tool->link }}" target="_blank">{{ $tool->link }}</a></td>
                    <td>
                        <a href="{{ route('tools.show', $tool->id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('tools.edit', $tool->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('tools.destroy', $tool->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
