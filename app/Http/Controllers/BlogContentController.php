<?php

namespace App\Http\Controllers;

use App\Models\BlogContent;
use Illuminate\Http\Request;

class BlogContentController extends Controller
{
    public function index(Request $request)
    {
        $blogContents = BlogContent::all();

        if ($request->is('api/*')) {
            return response()->json($blogContents);
        }

        return view('blogContents.index', compact('blogContents'));
    }


    public function create()
    {
        return view('blogContents.create');
    }

    public function store(Request $request)
    {
        $content = BlogContent::create($request->all());

        if ($request->is('api/*')) {
            return response()->json($content, 201);
        }

        return redirect('/blogContents');
    }

    public function show(Request $request, $id)
    {
        $content = BlogContent::findOrFail($id);

        if ($request->is('api/*')) {
            return response()->json($content);
        }

        return view('blogContents.show', compact('content'));
    }

    public function edit($id)
    {
        $content = BlogContent::findOrFail($id);
        return view('blogContents.edit', compact('content'));
    }

    public function update(Request $request, $id)
    {
        $content = BlogContent::findOrFail($id);
        $content->update($request->all());

        if ($request->is('api/*')) {
            return response()->json($content);
        }

        return redirect('/blogContents');
    }

    public function destroy(Request $request, $id)
    {
        $content = BlogContent::findOrFail($id);
        $content->delete();

        if ($request->is('api/*')) {
            return response()->json(null, 204);
        }

        return redirect('/blogContents');
    }
}
