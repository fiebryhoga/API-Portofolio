<?php

namespace App\Http\Controllers;

use App\Models\ReferenceContent;
use Illuminate\Http\Request;

class ReferenceContentController extends Controller
{
    public function index(Request $request)
    {
        $referenceContents = ReferenceContent::all();

        if ($request->is('api/*')) {
            return response()->json($referenceContents);
        }

        return view('referenceContents.index', compact('referenceContents'));
    }

    public function create()
    {
        return view('referenceContents.create');
    }

    public function store(Request $request)
    {
        $referenceContent = ReferenceContent::create($request->all());

        if ($request->is('api/*')) {
            return response()->json($referenceContent, 201);
        }

        return redirect('/referenceContents');
    }

    public function show(Request $request, $id)
    {
        $referenceContent = ReferenceContent::findOrFail($id);

        if ($request->is('api/*')) {
            return response()->json($referenceContent);
        }

        return view('referenceContents.show', compact('referenceContent'));
    }

    public function edit($id)
    {
        $referenceContent = ReferenceContent::findOrFail($id);
        return view('referenceContents.edit', compact('referenceContent'));
    }

    public function update(Request $request, $id)
    {
        $referenceContent = ReferenceContent::findOrFail($id);
        $referenceContent->update($request->all());

        if ($request->is('api/*')) {
            return response()->json($referenceContent);
        }

        return redirect('/referenceContents');
    }

    public function destroy(Request $request, $id)
    {
        $referenceContent = ReferenceContent::findOrFail($id);
        $referenceContent->delete();

        if ($request->is('api/*')) {
            return response()->json(null, 204);
        }

        return redirect('/referenceContents');
    }
}
