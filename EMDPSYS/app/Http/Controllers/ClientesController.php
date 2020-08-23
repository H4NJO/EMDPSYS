<?php

namespace App\Http\Controllers;

use App\MCliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        return MCliente::all();
    }

    public function show(MCliente $cliente)
    {
        return $cliente;
    }

    public function store(Request $request)
    {
        $cliente = MCliente::create($request->all());

        return response()->json($cliente, 201);
    }

    public function update(Request $request, MCliente $cliente)
    {
        $cliente->update($request->all());

        return response()->json($cliente, 200);
    }

    public function delete(MCliente $cliente)
    {
        $cliente->delete();

        return response()->json(null, 204);
    }
}