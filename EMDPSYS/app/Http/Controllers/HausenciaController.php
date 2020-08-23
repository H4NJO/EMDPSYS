<?php

namespace App\Http\Controllers;

use App\Hausencia;
use Illuminate\Http\Request;

class HausenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Hausencia::all();
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
     * @param  \App\Hausencia  $hausencia
     * @return \Illuminate\Http\Response
     */
    public function show(Hausencia $hausencia)
    {
        return $hausencia;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hausencia  $hausencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Hausencia $hausencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hausencia  $hausencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hausencia $hausencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hausencia  $hausencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hausencia $hausencia)
    {
        //
    }
}
