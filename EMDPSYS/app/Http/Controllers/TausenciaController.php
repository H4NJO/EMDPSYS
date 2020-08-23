<?php

namespace App\Http\Controllers;

use App\Tausencia;
use Illuminate\Http\Request;

class TausenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tausencia::all();
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
     * @param  \App\Tausencia  $tausencia
     * @return \Illuminate\Http\Response
     */
    public function show(Tausencia $tausencia)
    {
        return $tausencia;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tausencia  $tausencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Tausencia $tausencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tausencia  $tausencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tausencia $tausencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tausencia  $tausencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tausencia $tausencia)
    {
        //
    }
}
