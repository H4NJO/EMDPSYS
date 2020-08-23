<?php

namespace App\Http\Controllers;

use App\TUnidad;
use Illuminate\Http\Request;

class UnidadController extends Controller
{
    public function index()
    {
        return TUnidad::all();
    }

    public function show(TUnidad $unidad)
    {
        return $unidad;
    }

    public function store(Request $request)
    {
        $unidad = TUnidad::create($request->all());

        return response()->json($unidad, 201);
    }

    public function update(Request $request, TUnidad $unidad)
    {
        $unidad->update($request->all());

        return response()->json($unidad, 200);
    }

    public function delete(TUnidad $unidad)
    {
        $unidad->delete();

        return response()->json(null, 204);
    }
}
