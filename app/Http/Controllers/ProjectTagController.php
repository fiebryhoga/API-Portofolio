<?php

namespace App\Http\Controllers;

use App\Models\ProjectTag;
use Illuminate\Http\Request;

class ProjectTagController extends Controller
{
    public function index()
    {
        $tags = ProjectTag::all();
        return response()->json($tags);
    }

    public function store(Request $request)
    {
        $tag = ProjectTag::create($request->all());
        return response()->json($tag, 201);
    }

    public function show($id)
    {
        $tag = ProjectTag::find($id);
        return response()->json($tag);
    }

    public function update(Request $request, $id)
    {
        $tag = ProjectTag::find($id);
        $tag->update($request->all());
        return response()->json($tag);
    }

    public function destroy($id)
    {
        ProjectTag::destroy($id);
        return response()->json(null, 204);
    }
}
