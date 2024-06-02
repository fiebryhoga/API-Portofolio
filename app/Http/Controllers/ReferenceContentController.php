<?php

namespace App\Http\Controllers;

use App\Models\ReferenceContent;
use Illuminate\Http\Request;

class ReferenceContentController extends Controller
{
    public function index()
    {
        $contents = ReferenceContent::all();
        return response()->json($contents);
    }

    public function create()
    {
        // Return view for creating a new reference content
    }

    public function store(Request $request)
    {
        $content = ReferenceContent::create($request->all());
        return response()->json($content, 201);
    }

    public function show($id)
    {
        $content = ReferenceContent::find($id);
        return response()->json($content);
    }

    public function edit($id)
    {
        $content = ReferenceContent::find($id);
        // Return view for editing the reference content
        return response()->json($content);
    }

    public function update(Request $request, $id)
    {
        $content = ReferenceContent::find($id);
        $content->update($request->all());
        return response()->json($content);
    }

    public function destroy($id)
    {
        ReferenceContent::destroy($id);
        return response()->json(null, 204);
    }
}
