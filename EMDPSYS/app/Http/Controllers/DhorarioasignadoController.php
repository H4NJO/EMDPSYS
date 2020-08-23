<?php

namespace App\Http\Controllers;

use App\Dhorarioasignado;
use Illuminate\Http\Request;

class DhorarioasignadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dhorarioasignado::all();
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
     * @param  \App\Dhorarioasignado  $dhorarioasignado
     * @return \Illuminate\Http\Response
     */
    public function show(Dhorarioasignado $dhorarioasignado)
    {
        return $dhorarioasignado;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dhorarioasignado  $dhorarioasignado
     * @return \Illuminate\Http\Response
     */
    public function edit(Dhorarioasignado $dhorarioasignado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dhorarioasignado  $dhorarioasignado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dhorarioasignado $dhorarioasignado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dhorarioasignado  $dhorarioasignado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dhorarioasignado $dhorarioasignado)
    {
        //
    }
}
