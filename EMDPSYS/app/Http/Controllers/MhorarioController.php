<?php

namespace App\Http\Controllers;

use App\Mhorario;
use Illuminate\Http\Request;

class MhorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mhorario::all();
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
     * @param  \App\Mhorario  $mhorario
     * @return \Illuminate\Http\Response
     */
    public function show(Mhorario $mhorario)
    {
        return $mhorario;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mhorario  $mhorario
     * @return \Illuminate\Http\Response
     */
    public function edit(Mhorario $mhorario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mhorario  $mhorario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mhorario $mhorario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mhorario  $mhorario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mhorario $mhorario)
    {
        //
    }
}
