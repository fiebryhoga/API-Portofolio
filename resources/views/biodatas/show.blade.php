@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Biodata Details</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $biodata->id }}</td>
        </tr>
        <tr>
            <th>Greeting</th>
            <td>{{ $biodata->gretting }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $biodata->name }}</td>
        </tr>
        <tr>
            <th>Job</th>
            <td>{{ $biodata->job }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ $biodata->description }}</td>
        </tr>
        <tr>
            <th>Image</th>
            <td><img src="{{ asset($biodata->image) }}" alt="{{ $biodata->name }}" width="100"></td>
        </tr>
        <tr>
            <th>Contact</th>
            <td>{{ $biodata->contact }}</td>
        </tr>
        <tr>
            <th>Quote</th>
            <td>{{ $biodata->quote }}</td>
        </tr>
        <tr>
            <th>Description Quote</th>
            <td>{{ $biodata->descriptionQuote }}</td>
        </tr>
        <tr>
            <th>Link Anonymous</th>
            <td>{{ $biodata->linkAnonymous }}</td>
        </tr>
        <tr>
            <th>Linkedin</th>
            <td>{{ $biodata->linkedin }}</td>
        </tr>
        <tr>
            <th>Dribble</th>
            <td>{{ $biodata->dribble }}</td>
        </tr>
        <tr>
            <th>Github</th>
            <td>{{ $biodata->github }}</td>
        </tr>
        <tr>
            <th>Instagram</th>
            <td>{{ $biodata->instagram }}</td>
        </tr>
        <tr>
            <th>Twitter</th>
            <td>{{ $biodata->twitter }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $biodata->email }}</td>
        </tr>
        <tr>
            <th>Link Linkedin</th>
            <td>{{ $biodata->linkLinkedin }}</td>
        </tr>
        <tr>
            <th>Link Dribble</th>
            <td>{{ $biodata->linkDribble }}</td>
        </tr>
        <tr>
            <th>Link Github</th>
            <td>{{ $biodata->linkGithub }}</td>
        </tr>
        <tr>
            <th>Link Instagram</th>
            <td>{{ $biodata->linkInstagram }}</td>
        </tr>
        <tr>
            <th>Link Twitter</th>
            <td>{{ $biodata->linkTwitter }}</td>
        </tr>
        <tr>
            <th>Link Email</th>
            <td>{{ $biodata->linkEmail }}</td>
        </tr>
    </table>
    <a href="{{ route('biodatas.index') }}" class="btn btn-primary">Back to List</a>
</div>
@endsection
