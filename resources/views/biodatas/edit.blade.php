@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Edit Biodata</h1>
    <form action="{{ route('biodatas.update', $biodata->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="gretting">Greeting</label>
            <input type="text" name="gretting" class="form-control" value="{{ $biodata->gretting }}" required>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $biodata->name }}" required>
        </div>
        <div class="form-group">
            <label for="job">Job</label>
            <input type="text" name="job" class="form-control" value="{{ $biodata->job }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required>{{ $biodata->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="contact">Contact</label>
            <input type="text" name="contact" class="form-control" value="{{ $biodata->contact }}" required>
        </div>
        <div class="form-group">
            <label for="quote">Quote</label>
            <input type="text" name="quote" class="form-control" value="{{ $biodata->quote }}" required>
        </div>
        <div class="form-group">
            <label for="descriptionQuote">Description Quote</label>
            <textarea name="descriptionQuote" class="form-control" required>{{ $biodata->descriptionQuote }}</textarea>
        </div>
        <div class="form-group">
            <label for="linkAnonymous">Link Anonymous</label>
            <input type="text" name="linkAnonymous" class="form-control" value="{{ $biodata->linkAnonymous }}" required>
        </div>
        <div class="form-group">
            <label for="linkedin">Linkedin</label>
            <input type="text" name="linkedin" class="form-control" value="{{ $biodata->linkedin }}" required>
        </div>
        <div class="form-group">
            <label for="dribble">Dribble</label>
            <input type="text" name="dribble" class="form-control" value="{{ $biodata->dribble }}" required>
        </div>
        <div class="form-group">
            <label for="github">Github</label>
            <input type="text" name="github" class="form-control" value="{{ $biodata->github }}" required>
        </div>
        <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="text" name="instagram" class="form-control" value="{{ $biodata->instagram }}" required>
        </div>
        <div class="form-group">
            <label for="twitter">Twitter</label>
            <input type="text" name="twitter" class="form-control" value="{{ $biodata->twitter }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $biodata->email }}" required>
        </div>
        <div class="form-group">
            <label for="linkLinkedin">Link Linkedin</label>
            <input type="text" name="linkLinkedin" class="form-control" value="{{ $biodata->linkLinkedin }}" required>
        </div>
        <div class="form-group">
            <label for="linkLinkedin">Link dribble</label>
            <input type="text" name="linkLinkedin" class="form-control" value="{{ $biodata->linkDribble }}" required>
        </div>
        <div class="form-group">
            <label for="linkLinkedin">Link github</label>
            <input type="text" name="linkLinkedin" class="form-control" value="{{ $biodata->linkGithub }}" required>
        </div>
        <div class="form-group">
            <label for="linkLinkedin">Link instagram</label>
            <input type="text" name="linkLinkedin" class="form-control" value="{{ $biodata->linkInstagram }}" required>
        </div>
        <div class="form-group">
            <label for="linkLinkedin">Link twitter</label>
            <input type="text" name="linkLinkedin" class="form-control" value="{{ $biodata->linkTwitter }}" required>
        </div>
        <div class="form-group">
            <label for="linkLinkedin">Link Email</label>
            <input type="text" name="linkLinkedin" class="form-control" value="{{ $biodata->linkEmail }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection