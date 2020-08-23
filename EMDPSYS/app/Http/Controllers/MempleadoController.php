<?php

namespace App\Http\Controllers;

use App\Mempleado;
use Illuminate\Http\Request;

class MempleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mempleado::all();
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
     * @param  \App\Mempleado  $mempleado
     * @return \Illuminate\Http\Response
     */
    public function show(Mempleado $mempleado)
    {
        return $mempleado;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mempleado  $mempleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Mempleado $mempleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mempleado  $mempleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mempleado $mempleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mempleado  $mempleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mempleado $mempleado)
    {
        //
    }
}
