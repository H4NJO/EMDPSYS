<?php

namespace App\Http\Controllers;

use App\MEmpleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        return MEmpleado::all();
    }

    public function show(MEmpleado $empleado)
    {
        return $empleado;
    }

    public function store(Request $request)
    {
        $empleado = MEmpleado::create($request->all());

        return response()->json($empleado, 201);
    }

    public function update(Request $request, MEmpleado $empleado)
    {
        $empleado->update($request->all());

        return response()->json($empleado, 200);
    }

    public function delete(MEmpleado $empleado)
    {
        $empleado->delete();

        return response()->json(null, 204);
    }
}