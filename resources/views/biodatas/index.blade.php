@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Biodatas</h1>
    <a href="{{ route('biodatas.create') }}" class="btn btn-primary">Add Biodata</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Greeting</th>
                <th>Name</th>
                <th>Job</th>
                <th>Description</th>
                <th>Image</th>
                <th>Contact</th>
                <th>Quote</th>
                <th>Description Quote</th>
                <th>Link Anonymous</th>
                <th>Linkedin</th>
                <th>Dribble</th>
                <th>Github</th>
                <th>Instagram</th>
                <th>Twitter</th>
                <th>Email</th>
                <th>Link Linkedin</th>
                <th>Link Dribble</th>
                <th>Link Github</th>
                <th>Link Instagram</th>
                <th>Link Twitter</th>
                <th>Link Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($biodatas as $biodata)
                <tr>
                    <td>{{ $biodata->id }}</td>
                    <td>{{ $biodata->gretting }}</td>
                    <td>{{ $biodata->name }}</td>
                    <td>{{ $biodata->job }}</td>
                    <td>{{ $biodata->description }}</td>
                    <td><img src="{{ asset($biodata->image) }}" alt="{{ $biodata->name }}" width="50"></td>
                    <td>{{ $biodata->contact }}</td>
                    <td>{{ $biodata->quote }}</td>
                    <td>{{ $biodata->descriptionQuote }}</td>
                    <td>{{ $biodata->linkAnonymous }}</td>
                    <td>{{ $biodata->linkedin }}</td>
                    <td>{{ $biodata->dribble }}</td>
                    <td>{{ $biodata->github }}</td>
                    <td>{{ $biodata->instagram }}</td>
                    <td>{{ $biodata->twitter }}</td>
                    <td>{{ $biodata->email }}</td>
                    <td>{{ $biodata->linkLinkedin }}</td>
                    <td>{{ $biodata->linkDribble }}</td>
                    <td>{{ $biodata->linkGithub }}</td>
                    <td>{{ $biodata->linkInstagram }}</td>
                    <td>{{ $biodata->linkTwitter }}</td>
                    <td>{{ $biodata->linkEmail }}</td>
                    <td>
                        <a href="{{ route('biodatas.edit', $biodata->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('biodatas.destroy', $biodata->id) }}" method="POST" style="display:inline;">
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
