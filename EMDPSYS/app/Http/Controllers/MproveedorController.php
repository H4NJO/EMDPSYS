<?php

namespace App\Http\Controllers;

use App\Mproveedor;
use Illuminate\Http\Request;

class MproveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mproveedor::all();
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
     * @param  \App\Mproveedor  $mproveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Mproveedor $mproveedor)
    {
        return $mproveedor;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mproveedor  $mproveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Mproveedor $mproveedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mproveedor  $mproveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mproveedor $mproveedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mproveedor  $mproveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mproveedor $mproveedor)
    {
        //
    }
}
