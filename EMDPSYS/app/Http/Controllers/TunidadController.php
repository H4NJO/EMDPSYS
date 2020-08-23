<?php

namespace App\Http\Controllers;

use App\Tunidad;
use Illuminate\Http\Request;

class TunidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tunidad::all();
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
     * @param  \App\Tunidad  $tunidad
     * @return \Illuminate\Http\Response
     */
    public function show(Tunidad $tunidad)
    {
        return $tunidad;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tunidad  $tunidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Tunidad $tunidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tunidad  $tunidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tunidad $tunidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tunidad  $tunidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tunidad $tunidad)
    {
        //
    }
}
