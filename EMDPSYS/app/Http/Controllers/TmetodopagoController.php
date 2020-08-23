<?php

namespace App\Http\Controllers;

use App\Tmetodopago;
use Illuminate\Http\Request;

class TmetodopagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tmetodopago::all();
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
     * @param  \App\Tmetodopago  $tmetodopago
     * @return \Illuminate\Http\Response
     */
    public function show(Tmetodopago $tmetodopago)
    {
        return $tmetodopago;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tmetodopago  $tmetodopago
     * @return \Illuminate\Http\Response
     */
    public function edit(Tmetodopago $tmetodopago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tmetodopago  $tmetodopago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tmetodopago $tmetodopago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tmetodopago  $tmetodopago
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tmetodopago $tmetodopago)
    {
        //
    }
}
