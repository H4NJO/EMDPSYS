<?php

namespace App\Http\Controllers;

use App\Mtransferenciaproducto;
use Illuminate\Http\Request;

class MtransferenciaproductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mtransferenciaproducto::all();
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
     * @param  \App\Mtransferenciaproducto  $mtransferenciaproducto
     * @return \Illuminate\Http\Response
     */
    public function show(Mtransferenciaproducto $mtransferenciaproducto)
    {
        return $mtransferenciaproducto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mtransferenciaproducto  $mtransferenciaproducto
     * @return \Illuminate\Http\Response
     */
    public function edit(Mtransferenciaproducto $mtransferenciaproducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mtransferenciaproducto  $mtransferenciaproducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mtransferenciaproducto $mtransferenciaproducto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mtransferenciaproducto  $mtransferenciaproducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mtransferenciaproducto $mtransferenciaproducto)
    {
        //
    }
}
