<?php

namespace App\Http\Controllers;

use App\TcompingresoMingreso;
use Illuminate\Http\Request;

class TcompingresoMingresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TcompingresoMingreso::all();
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
     * @param  \App\TcompingresoMingreso  $tcompingresoMingreso
     * @return \Illuminate\Http\Response
     */
    public function show(TcompingresoMingreso $tcompingresoMingreso)
    {
        return $tcompingresoMingreso;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TcompingresoMingreso  $tcompingresoMingreso
     * @return \Illuminate\Http\Response
     */
    public function edit(TcompingresoMingreso $tcompingresoMingreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TcompingresoMingreso  $tcompingresoMingreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TcompingresoMingreso $tcompingresoMingreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TcompingresoMingreso  $tcompingresoMingreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(TcompingresoMingreso $tcompingresoMingreso)
    {
        //
    }
}
