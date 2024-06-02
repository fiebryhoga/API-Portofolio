<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    public function index(Request $request)
    {
        $references = Reference::all();

        if ($request->is('api/*')) {
            return response()->json($references);
        }

        return view('references.index', compact('references'));
    }

    public function create()
    {
        return view('references.create');
    }

    public function store(Request $request)
    {
        $reference = Reference::create($request->all());

        if ($request->is('api/*')) {
            return response()->json($reference, 201);
        }

        return redirect('/references');
    }

    public function show(Request $request, $id)
    {
        $reference = Reference::findOrFail($id);

        if ($request->is('api/*')) {
            return response()->json($reference);
        }

        return view('references.show', compact('reference'));
    }

    public function edit($id)
    {
        $reference = Reference::findOrFail($id);
        return view('references.edit', compact('reference'));
    }

    public function update(Request $request, $id)
    {
        $reference = Reference::findOrFail($id);
        $reference->update($request->all());

        if ($request->is('api/*')) {
            return response()->json($reference);
        }

        return redirect('/references');
    }

    public function destroy(Request $request, $id)
    {
        $reference = Reference::findOrFail($id);
        $reference->delete();

        if ($request->is('api/*')) {
            return response()->json(null, 204);
        }

        return redirect('/references');
    }
}
