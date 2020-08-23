<?php

namespace App\Http\Controllers;

Use App\TSubcategoria;
use Illuminate\Http\Request;

class SubcategoriaController extends Controller
{

    public function index()
    {
        return TSubcategoria::all();
    }

    public function show(TSubcategoria $subcategoria)
    {
        return $subcategoria;
    }

    public function store(Request $request)
    {
        $subcategoria = TSubcategoria::create($request->all());

        return response()->json($subcategoria, 201);
    }

    public function update(Request $request, TSubcategoria $subcategoria)
    {
        $subcategoria->update($request->all());

        return response()->json($subcategoria, 200);
    }

    public function delete(TSubcategoria $subcategoria)
    {
        $subcategoria->delete();

        return response()->json(null, 204);
    }
}