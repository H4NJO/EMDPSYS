<?php

namespace App\Http\Controllers;

use App\Hegreso;
use Illuminate\Http\Request;

class HegresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Hegreso::all();
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
     * @param  \App\Hegreso  $hegreso
     * @return \Illuminate\Http\Response
     */
    public function show(Hegreso $hegreso)
    {
        return $hegreso;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hegreso  $hegreso
     * @return \Illuminate\Http\Response
     */
    public function edit(Hegreso $hegreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hegreso  $hegreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hegreso $hegreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hegreso  $hegreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hegreso $hegreso)
    {
        //
    }
}
