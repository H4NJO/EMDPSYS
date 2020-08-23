<?php

namespace App\Http\Controllers;

use App\MProveedor;
use Illuminate\Http\Request;

class Proveedorontroller extends Controller
{
    public function index()
    {
        return MProveedor::all();
    }

    public function show(MProveedor $proveedor)
    {
        return $proveedor;
    }

    public function store(Request $request)
    {
        $proveedor = MProveedor::create($request->all());

        return response()->json($proveedor, 201);
    }

    public function update(Request $request, MProveedor $proveedor)
    {
        $proveedor->update($request->all());

        return response()->json($proveedor, 200);
    }

    public function delete(MProveedor $proveedor)
    {
        $proveedor->delete();

        return response()->json(null, 204);
    }
}