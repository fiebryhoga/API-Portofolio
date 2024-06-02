<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function index()
    {
        $tools = Tool::all();
        return response()->json($tools);
    }

    public function create()
    {
        // Return view for creating a new tool
    }

    public function store(Request $request)
    {
        $tool = Tool::create($request->all());
        return response()->json($tool, 201);
    }

    public function show($id)
    {
        $tool = Tool::find($id);
        return response()->json($tool);
    }

    public function edit($id)
    {
        $tool = Tool::find($id);
        // Return view for editing the tool
        return response()->json($tool);
    }

    public function update(Request $request, $id)
    {
        $tool = Tool::find($id);
        $tool->update($request->all());
        return response()->json($tool);
    }

    public function destroy($id)
    {
        Tool::destroy($id);
        return response()->json(null, 204);
    }
}
