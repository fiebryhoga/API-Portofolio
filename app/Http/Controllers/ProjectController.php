<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::all();

        if ($request->is('api/*')) {
            return response()->json($projects);
        }

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $project = Project::create($request->all());

        if ($request->is('api/*')) {
            return response()->json($project, 201);
        }

        return redirect('/projects');
    }

    public function show(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        if ($request->is('api/*')) {
            return response()->json($project);
        }

        return view('projects.show', compact('project'));
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->update($request->all());

        if ($request->is('api/*')) {
            return response()->json($project);
        }

        return redirect('/projects');
    }

    public function destroy(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        if ($request->is('api/*')) {
            return response()->json(null, 204);
        }

        return redirect('/projects');
    }
}
