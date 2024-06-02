<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function index(Request $request)
    {
        $tools = Tool::all();

        if ($request->is('api/*')) {
            return response()->json($tools);
        }

        return view('tools.index', compact('tools'));
    }

    public function create()
    {
        return view('tools.create');
    }

    public function store(Request $request)
    {
        $tool = Tool::create($request->all());

        if ($request->is('api/*')) {
            return response()->json($tool, 201);
        }

        return redirect('/tools');
    }

    public function show(Request $request, $id)
    {
        $tool = Tool::findOrFail($id);

        if ($request->is('api/*')) {
            return response()->json($tool);
        }

        return view('tools.show', compact('tool'));
    }

    public function edit($id)
    {
        $tool = Tool::findOrFail($id);
        return view('tools.edit', compact('tool'));
    }

    public function update(Request $request, $id)
    {
        $tool = Tool::findOrFail($id);
        $tool->update($request->all());

        if ($request->is('api/*')) {
            return response()->json($tool);
        }

        return redirect('/tools');
    }

    public function destroy(Request $request, $id)
    {
        $tool = Tool::findOrFail($id);
        $tool->delete();

        if ($request->is('api/*')) {
            return response()->json(null, 204);
        }

        return redirect('/tools');
    }
}
