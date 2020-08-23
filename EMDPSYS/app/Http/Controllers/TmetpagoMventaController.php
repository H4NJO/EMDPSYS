<?php

namespace App\Http\Controllers;

use App\TmetpagoMventa;
use Illuminate\Http\Request;

class TmetpagoMventaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TmetpagoMventa::all();
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
     * @param  \App\TmetpagoMventa  $tmetpagoMventa
     * @return \Illuminate\Http\Response
     */
    public function show(TmetpagoMventa $tmetpagoMventa)
    {
        return $tmetpagoMventa;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TmetpagoMventa  $tmetpagoMventa
     * @return \Illuminate\Http\Response
     */
    public function edit(TmetpagoMventa $tmetpagoMventa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TmetpagoMventa  $tmetpagoMventa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TmetpagoMventa $tmetpagoMventa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TmetpagoMventa  $tmetpagoMventa
     * @return \Illuminate\Http\Response
     */
    public function destroy(TmetpagoMventa $tmetpagoMventa)
    {
        //
    }
}
