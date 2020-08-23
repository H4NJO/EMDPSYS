<?php

namespace App\Http\Controllers;

use App\Dtransferenciaproducto;
use Illuminate\Http\Request;

class DtransferenciaproductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dtransferenciaproducto::all();
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
     * @param  \App\Dtransferenciaproducto  $dtransferenciaproducto
     * @return \Illuminate\Http\Response
     */
    public function show(Dtransferenciaproducto $dtransferenciaproducto)
    {
        return $dtransferenciaproducto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dtransferenciaproducto  $dtransferenciaproducto
     * @return \Illuminate\Http\Response
     */
    public function edit(Dtransferenciaproducto $dtransferenciaproducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dtransferenciaproducto  $dtransferenciaproducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dtransferenciaproducto $dtransferenciaproducto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dtransferenciaproducto  $dtransferenciaproducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dtransferenciaproducto $dtransferenciaproducto)
    {
        //
    }
}
