<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index(Request $request)
    {
        $biodatas = Biodata::all();

        if ($request->is('api/*')) {
            return response()->json($biodatas);
        }

        return view('biodatas.index', compact('biodatas'));
    }

    public function create()
    {
        return view('biodatas.create');
    }

    public function store(Request $request)
    {
        $biodata = Biodata::create($request->all());

        if ($request->is('api/*')) {
            return response()->json($biodata, 201);
        }

        return redirect('/biodatas');
    }

    public function show(Request $request, $id)
    {
        $biodata = Biodata::findOrFail($id);

        if ($request->is('api/*')) {
            return response()->json($biodata);
        }

        return view('biodatas.show', compact('biodata'));
    }

    public function edit($id)
    {
        $biodata = Biodata::findOrFail($id);
        return view('biodatas.edit', compact('biodata'));
    }

    public function update(Request $request, $id)
    {
        $biodata = Biodata::findOrFail($id);
        $biodata->update($request->all());

        if ($request->is('api/*')) {
            return response()->json($biodata);
        }

        return redirect('/biodatas');
    }

    public function destroy(Request $request, $id)
    {
        $biodata = Biodata::findOrFail($id);
        $biodata->delete();

        if ($request->is('api/*')) {
            return response()->json(null, 204);
        }

        return redirect('/biodatas');
    }
}
