<?php

namespace App\Http\Controllers;

Use App\TCategoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index()
    {
        return TCategoria::all();
    }

    public function show(TCategoria $categoria)
    {
        return $categoria;
    }

    public function store(Request $request)
    {
        $categoria = TCategoria::create($request->all());

        return response()->json($categoria, 201);
    }

    public function update(Request $request, TCategoria $categoria)
    {
        $categoria->update($request->all());

        return response()->json($categoria, 200);
    }

    public function delete(TCategoria $categoria)
    {
        $categoria->delete();

        return response()->json(null, 204);
    }
}
