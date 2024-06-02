<?php

namespace App\Http\Controllers;

use App\Models\ProjectTag;
use Illuminate\Http\Request;

class ProjectTagController extends Controller
{
    public function index(Request $request)
    {
        $projectTags = ProjectTag::all();

        if ($request->is('api/*')) {
            return response()->json($projectTags);
        }

        return view('projectTags.index', compact('projectTags'));
    }

    public function create()
    {
        return view('projectTags.create');
    }

    public function store(Request $request)
    {
        $projectTag = ProjectTag::create($request->all());

        if ($request->is('api/*')) {
            return response()->json($projectTag, 201);
        }

        return redirect('/projectTags');
    }

    public function show(Request $request, $id)
    {
        $projectTag = ProjectTag::findOrFail($id);

        if ($request->is('api/*')) {
            return response()->json($projectTag);
        }

        return view('projectTags.show', compact('projectTag'));
    }

    public function edit($id)
    {
        $projectTag = ProjectTag::findOrFail($id);
        return view('projectTags.edit', compact('projectTag'));
    }

    public function update(Request $request, $id)
    {
        $projectTag = ProjectTag::findOrFail($id);
        $projectTag->update($request->all());

        if ($request->is('api/*')) {
            return response()->json($projectTag);
        }

        return redirect('/projectTags');
    }

    public function destroy(Request $request, $id)
    {
        $projectTag = ProjectTag::findOrFail($id);
        $projectTag->delete();

        if ($request->is('api/*')) {
            return response()->json(null, 204);
        }

        return redirect('/projectTags');
    }
}
