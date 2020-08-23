<?php

namespace App\Http\Controllers;

use App\Mdevolucion;
use Illuminate\Http\Request;

class MdevolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mdevolucion::all();
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
     * @param  \App\Mdevolucion  $mdevolucion
     * @return \Illuminate\Http\Response
     */
    public function show(Mdevolucion $mdevolucion)
    {
        return $mdevolucion;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mdevolucion  $mdevolucion
     * @return \Illuminate\Http\Response
     */
    public function edit(Mdevolucion $mdevolucion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mdevolucion  $mdevolucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mdevolucion $mdevolucion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mdevolucion  $mdevolucion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mdevolucion $mdevolucion)
    {
        //
    }
}
