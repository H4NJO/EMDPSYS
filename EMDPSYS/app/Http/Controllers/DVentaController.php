<?php

namespace App\Http\Controllers;

use App\DVenta;
use Illuminate\Http\Request;

class DVentaController extends Controller
{
    public function index()
    {
        return DVenta::all();
    }

    public function show(DVenta $dventa)
    {
        return $dventa;
    }

    public function store(Request $request)
    {
        $dventa = DVenta::create($request->all());

        return response()->json($dventa, 201);
    }

    public function update(Request $request, DVenta $dventa)
    {
        $dventa->update($request->all());

        return response()->json($dventa, 200);
    }

    public function delete(DVenta $dventa)
    {
        $dventa->delete();

        return response()->json(null, 204);
    }
}
