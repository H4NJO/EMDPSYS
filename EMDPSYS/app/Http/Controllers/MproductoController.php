<?php

namespace App\Http\Controllers;

use App\Mproducto;
use Illuminate\Http\Request;

class MproductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mproducto::all();
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
     * @param  \App\Mproducto  $mproducto
     * @return \Illuminate\Http\Response
     */
    public function show(Mproducto $mproducto)
    {
        return $mproducto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mproducto  $mproducto
     * @return \Illuminate\Http\Response
     */
    public function edit(Mproducto $mproducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mproducto  $mproducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mproducto $mproducto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mproducto  $mproducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mproducto $mproducto)
    {
        //
    }
}
