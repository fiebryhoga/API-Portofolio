@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Reference Details</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $reference->id }}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{ $reference->title }}</td>
        </tr>
        
    </table>
    <a href="{{ route('references.index') }}" class="btn btn-primary">Back to List</a>
</div>
@endsection
