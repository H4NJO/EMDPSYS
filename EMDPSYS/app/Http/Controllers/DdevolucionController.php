<?php

namespace App\Http\Controllers;

use App\Ddevolucion;
use Illuminate\Http\Request;

class DdevolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Ddevolucion::all();
        $result = array("meta"=> array(
                    "msg"=>"Ok"),
                    "status"=>true,
                    "objects"=>$data);
        return response()->json($result,201);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ddevolucion  $ddevolucion
     * @return \Illuminate\Http\Response
     */
    public function show(Ddevolucion $ddevolucion)
    {
        return $ddevolucion;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ddevolucion  $ddevolucion
     * @return \Illuminate\Http\Response
     */
    public function edit(Ddevolucion $ddevolucion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ddevolucion  $ddevolucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ddevolucion $ddevolucion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ddevolucion  $ddevolucion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ddevolucion $ddevolucion)
    {
        //
    }
}
