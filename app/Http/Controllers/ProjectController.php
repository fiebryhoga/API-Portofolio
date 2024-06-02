<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('tags')->get();
        return response()->json($projects);
    }

    public function store(Request $request)
    {
        $project = Project::create($request->all());
        return response()->json($project, 201);
    }

    public function show($id)
    {
        $project = Project::with('tags')->find($id);
        return response()->json($project);
    }

    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $project->update($request->all());
        return response()->json($project);
    }

    public function destroy($id)
    {
        Project::destroy($id);
        return response()->json(null, 204);
    }
}
