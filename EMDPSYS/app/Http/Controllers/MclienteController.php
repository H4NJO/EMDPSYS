<?php

namespace App\Http\Controllers;

use App\Mcliente;
use Illuminate\Http\Request;

class MclienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mcliente::all();
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
     * @param  \App\Mcliente  $mcliente
     * @return \Illuminate\Http\Response
     */
    public function show(Mcliente $mcliente)
    {
        return $mcliente;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mcliente  $mcliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Mcliente $mcliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mcliente  $mcliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mcliente $mcliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mcliente  $mcliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mcliente $mcliente)
    {
        //
    }
}
