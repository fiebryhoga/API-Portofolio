<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    public function index()
    {
        $references = Reference::with('contents')->get();
        return response()->json($references);
    }

    public function create()
    {
        // Return view for creating a new reference
    }

    public function store(Request $request)
    {
        $reference = Reference::create($request->all());
        return response()->json($reference, 201);
    }

    public function show($id)
    {
        $reference = Reference::with('contents')->find($id);
        return response()->json($reference);
    }

    public function edit($id)
    {
        $reference = Reference::with('contents')->find($id);
        // Return view for editing the reference
        return response()->json($reference);
    }

    public function update(Request $request, $id)
    {
        $reference = Reference::find($id);
        $reference->update($request->all());
        return response()->json($reference);
    }

    public function destroy($id)
    {
        Reference::destroy($id);
        return response()->json(null, 204);
    }
}
