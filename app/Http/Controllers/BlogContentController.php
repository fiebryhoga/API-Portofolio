<?php

namespace App\Http\Controllers;

use App\Models\BlogContent;
use Illuminate\Http\Request;

class BlogContentController extends Controller
{
    public function index()
    {
        $contents = BlogContent::all();
        return response()->json($contents);
    }

    public function create()
    {
        // Return view for creating a new blog content
    }

    public function store(Request $request)
    {
        $content = BlogContent::create($request->all());
        return response()->json($content, 201);
    }

    public function show($id)
    {
        $content = BlogContent::find($id);
        return response()->json($content);
    }

    public function edit($id)
    {
        $content = BlogContent::find($id);
        // Return view for editing the blog content
        return response()->json($content);
    }

    public function update(Request $request, $id)
    {
        $content = BlogContent::find($id);
        $content->update($request->all());
        return response()->json($content);
    }

    public function destroy($id)
    {
        BlogContent::destroy($id);
        return response()->json(null, 204);
    }
}
