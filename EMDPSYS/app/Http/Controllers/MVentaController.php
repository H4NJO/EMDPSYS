<?php

namespace App\Http\Controllers;

use App\MVenta;
use Illuminate\Http\Request;

class MVentaController extends Controller
{
    public function index()
    {
        return MVenta::all();
    }

    public function show(MVenta $mventa)
    {
        return $mventa;
    }

    public function store(Request $request)
    {
        $mventa = MVenta::create($request->all());

        return response()->json($mventa, 201);
    }

    public function update(Request $request, MVenta $mventa)
    {
        $mventa->update($request->all());

        return response()->json($mventa, 200);
    }

    public function delete(MVenta $mventa)
    {
        $mventa->delete();

        return response()->json(null, 204);
    }
}
