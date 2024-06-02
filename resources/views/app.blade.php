<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    <!-- Make sure to include Bootstrap CSS correctly -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">Laravel App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/biodatas') }}">Biodatas</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/blogs') }}">Blogs</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/blog-contents') }}">Blog Contents</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/projects') }}">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/project-tags') }}">Project Tags</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/references') }}">References</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/reference-contents') }}">Reference Contents</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/tools') }}">Tools</a></li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
    <!-- Make sure to include jQuery and Bootstrap JS correctly -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
