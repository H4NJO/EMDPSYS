<?php

namespace App\Http\Controllers;

use App\DIngreso;
use Illuminate\Http\Request;

class dIngresosController extends Controller
{
    public function index()
    {
        return DIngreso::all();
    }

    public function show(DIngreso $dingreso)
    {
        return $dingreso;
    }

    public function store(Request $request)
    {
        $dingreso = DIngreso::create($request->all());

        return response()->json($dingreso, 201);
    }

    public function update(Request $request, DIngreso $dingreso)
    {
        $dingreso->update($request->all());

        return response()->json($dingreso, 200);
    }

    public function delete(DIngreso $dingreso)
    {
        $dingreso->delete();

        return response()->json(null, 204);
    }
}