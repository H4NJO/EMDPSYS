<?php

namespace App\Http\Controllers;

use App\Mingreso;
use Illuminate\Http\Request;

class MingresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mingreso::all();
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
     * @param  \App\Mingreso  $mingreso
     * @return \Illuminate\Http\Response
     */
    public function show(Mingreso $mingreso)
    {
        return $mingreso;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mingreso  $mingreso
     * @return \Illuminate\Http\Response
     */
    public function edit(Mingreso $mingreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mingreso  $mingreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mingreso $mingreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mingreso  $mingreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mingreso $mingreso)
    {
        //
    }
}
