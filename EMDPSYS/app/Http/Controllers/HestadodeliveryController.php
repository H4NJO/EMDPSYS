<?php

namespace App\Http\Controllers;

use App\Hestadodelivery;
use Illuminate\Http\Request;

class HestadodeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Hestadodelivery::all();
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
     * @param  \App\Hestadodelivery  $hestadodelivery
     * @return \Illuminate\Http\Response
     */
    public function show(Hestadodelivery $hestadodelivery)
    {
        return $hestadodelivery;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hestadodelivery  $hestadodelivery
     * @return \Illuminate\Http\Response
     */
    public function edit(Hestadodelivery $hestadodelivery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hestadodelivery  $hestadodelivery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hestadodelivery $hestadodelivery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hestadodelivery  $hestadodelivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hestadodelivery $hestadodelivery)
    {
        //
    }
}
