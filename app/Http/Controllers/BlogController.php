<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('contents')->get();
        return response()->json($blogs);
    }

    public function create()
    {
        // Return view for creating a new blog
    }

    public function store(Request $request)
    {
        $blog = Blog::create($request->all());
        return response()->json($blog, 201);
    }

    public function show($id)
    {
        $blog = Blog::with('contents')->find($id);
        return response()->json($blog);
    }

    public function edit($id)
    {
        $blog = Blog::with('contents')->find($id);
        // Return view for editing the blog
        return response()->json($blog);
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->update($request->all());
        return response()->json($blog);
    }

    public function destroy($id)
    {
        Blog::destroy($id);
        return response()->json(null, 204);
    }
}
