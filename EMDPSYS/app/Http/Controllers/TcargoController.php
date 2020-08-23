<?php

namespace App\Http\Controllers;

use App\Tcargo;
use Illuminate\Http\Request;

class TcargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tcargo::all();
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
     * @param  \App\Tcargo  $tcargo
     * @return \Illuminate\Http\Response
     */
    public function show(Tcargo $tcargo)
    {
        return $tcargo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tcargo  $tcargo
     * @return \Illuminate\Http\Response
     */
    public function edit(Tcargo $tcargo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tcargo  $tcargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tcargo $tcargo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tcargo  $tcargo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tcargo $tcargo)
    {
        //
    }
}
