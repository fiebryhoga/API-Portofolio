<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        try {
            $biodatas = Biodata::all();
            return response()->json($biodatas, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Server Error'], 500);
        }
    }

    public function create()
    {
        // Return view for creating a new biodata
    }

    public function store(Request $request)
    {
        $biodata = Biodata::create($request->all());
        return response()->json($biodata, 201);
    }

    public function show($id)
    {
        $biodata = Biodata::find($id);
        return response()->json($biodata);
    }

    public function edit($id)
    {
        $biodata = Biodata::find($id);
        // Return view for editing the biodata
        return response()->json($biodata);
    }

    public function update(Request $request, $id)
    {
        $biodata = Biodata::find($id);
        $biodata->update($request->all());
        return response()->json($biodata);
    }

    public function destroy($id)
    {
        Biodata::destroy($id);
        return response()->json(null, 204);
    }
}
