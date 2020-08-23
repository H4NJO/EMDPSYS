<?php

namespace App\Http\Controllers;

use App\TMarca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index()
    {
        return TMarca::all();
    }

    public function show(TMarca $marca)
    {
        return $marca;
    }

    public function store(Request $request)
    {
        $marca = TMarca::create($request->all());

        return response()->json($marca, 201);
    }

    public function update(Request $request, TMarca $marca)
    {
        $marca->update($request->all());

        return response()->json($marca, 200);
    }

    public function delete(TMarca $marca)
    {
        $marca->delete();

        return response()->json(null, 204);
    }
}
