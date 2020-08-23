<?php

namespace App\Http\Controllers;

use App\Testadodelivery;
use Illuminate\Http\Request;

class TestadodeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Testadodelivery::all();
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
     * @param  \App\Testadodelivery  $testadodelivery
     * @return \Illuminate\Http\Response
     */
    public function show(Testadodelivery $testadodelivery)
    {
        return $testadodelivery;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testadodelivery  $testadodelivery
     * @return \Illuminate\Http\Response
     */
    public function edit(Testadodelivery $testadodelivery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testadodelivery  $testadodelivery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testadodelivery $testadodelivery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testadodelivery  $testadodelivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testadodelivery $testadodelivery)
    {
        //
    }
}
