<?php

namespace App\Http\Controllers;

use App\MProducto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        return MProducto::all();
    }

    public function show(MProducto $producto)
    {
        return $producto;
    }

    public function store(Request $request)
    {
        $producto = MProducto::create($request->all());

        return response()->json($producto, 201);
    }

    public function update(Request $request, MProducto $producto)
    {
        $producto->update($request->all());

        return response()->json($producto, 200);
    }

    public function delete(MProducto $producto)
    {
        $producto->delete();

        return response()->json(null, 204);
    }
}
