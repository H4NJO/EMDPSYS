<?php

namespace App\Http\Controllers;

use App\MIngreso;
use Illuminate\Http\Request;

class mIngresosController extends Controller
{
    public function index()
    {
        return MIngreso::all();
    }

    public function show(MIngreso $mingreso)
    {
        return $mingreso;
    }

    public function store(Request $request)
    {
        $mingreso = MIngreso::create($request->all());

        return response()->json($mingreso, 201);
    }

    public function update(Request $request, MIngreso $mingreso)
    {
        $mingreso->update($request->all());

        return response()->json($mingreso, 200);
    }

    public function delete(MIngreso $mingreso)
    {
        $mingreso->delete();

        return response()->json(null, 204);
    }
}
