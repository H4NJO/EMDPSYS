<?php

namespace App\Http\Controllers;

use App\Tdocumento;
use Illuminate\Http\Request;

class TdocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tdocumento::all();
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
     * @param  \App\Tdocumento  $tdocumento
     * @return \Illuminate\Http\Response
     */
    public function show(Tdocumento $tdocumento)
    {
        return $tdocumento;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tdocumento  $tdocumento
     * @return \Illuminate\Http\Response
     */
    public function edit(Tdocumento $tdocumento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tdocumento  $tdocumento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tdocumento $tdocumento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tdocumento  $tdocumento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tdocumento $tdocumento)
    {
        //
    }
}
