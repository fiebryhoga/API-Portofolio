@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Create Biodata</h1>
    <form action="{{ route('biodatas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="gretting">Greeting</label>
            <input type="text" name="gretting" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="job">Job</label>
            <input type="text" name="job" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="contact">Contact</label>
            <input type="text" name="contact" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="quote">Quote</label>
            <input type="text" name="quote" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descriptionQuote">Description Quote</label>
            <textarea name="descriptionQuote" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="linkAnonymous">Link Anonymous</label>
            <input type="text" name="linkAnonymous" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="linkedin">Linkedin</label>
            <input type="text" name="linkedin" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="dribble">Dribble</label>
            <input type="text" name="dribble" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="github">Github</label>
            <input type="text" name="github" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="text" name="instagram" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="twitter">Twitter</label>
            <input type="text" name="twitter" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="linkLinkedin">Link Linkedin</label>
            <input type="text" name="linkLinkedin" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="linkDribble">Link Dribble</label>
            <input type="text" name="linkDribble" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="linkGithub">Link Github</label>
            <input type="text" name="linkGithub" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="linkInstagram">Link Instagram</label>
            <input type="text" name="linkInstagram" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="linkTwitter">Link Twitter</label>
            <input type="text" name="linkTwitter" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="linkEmail">Link Email</label>
            <input type="text" name="linkEmail" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
