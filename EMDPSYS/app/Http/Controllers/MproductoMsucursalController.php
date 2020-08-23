<?php

namespace App\Http\Controllers;

use App\MproductoMsucursal;
use Illuminate\Http\Request;

class MproductoMsucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = MproductoMsucursal::all();
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
     * @param  \App\MproductoMsucursal  $mproductoMsucursal
     * @return \Illuminate\Http\Response
     */
    public function show(MproductoMsucursal $mproductoMsucursal)
    {
        return $mproductoMsucursal;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MproductoMsucursal  $mproductoMsucursal
     * @return \Illuminate\Http\Response
     */
    public function edit(MproductoMsucursal $mproductoMsucursal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MproductoMsucursal  $mproductoMsucursal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MproductoMsucursal $mproductoMsucursal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MproductoMsucursal  $mproductoMsucursal
     * @return \Illuminate\Http\Response
     */
    public function destroy(MproductoMsucursal $mproductoMsucursal)
    {
        //
    }
}
