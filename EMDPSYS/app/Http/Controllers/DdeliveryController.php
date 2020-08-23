<?php

namespace App\Http\Controllers;

use App\Ddelivery;
use Illuminate\Http\Request;

class DdeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Ddelivery::all();
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
     * @param  \App\Ddelivery  $ddelivery
     * @return \Illuminate\Http\Response
     */
    public function show(Ddelivery $ddelivery)
    {
        return $ddelivery;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ddelivery  $ddelivery
     * @return \Illuminate\Http\Response
     */
    public function edit(Ddelivery $ddelivery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ddelivery  $ddelivery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ddelivery $ddelivery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ddelivery  $ddelivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ddelivery $ddelivery)
    {
        //
    }
}
