<?php

namespace App\Http\Controllers;

use App\Mproforma;
use Illuminate\Http\Request;

class MproformaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mproforma::all();
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
     * @param  \App\Mproforma  $mproforma
     * @return \Illuminate\Http\Response
     */
    public function show(Mproforma $mproforma)
    {
        return $mproforma;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mproforma  $mproforma
     * @return \Illuminate\Http\Response
     */
    public function edit(Mproforma $mproforma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mproforma  $mproforma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mproforma $mproforma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mproforma  $mproforma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mproforma $mproforma)
    {
        //
    }
}
