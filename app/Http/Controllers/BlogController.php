<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $blogs = Blog::all();

        if ($request->is('api/*')) {
            return response()->json($blogs);
        }

        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $blog = Blog::create($request->all());

        if ($request->is('api/*')) {
            return response()->json($blog, 201);
        }

        return redirect('/blogs');
    }

    public function show(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        if ($request->is('api/*')) {
            return response()->json($blog);
        }

        return view('blogs.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->update($request->all());

        if ($request->is('api/*')) {
            return response()->json($blog);
        }

        return redirect('/blogs');
    }

    public function destroy(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        if ($request->is('api/*')) {
            return response()->json(null, 204);
        }

        return redirect('/blogs');
    }
}
