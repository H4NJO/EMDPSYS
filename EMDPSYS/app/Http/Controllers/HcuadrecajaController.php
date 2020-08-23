<?php

namespace App\Http\Controllers;

use App\Hcuadrecaja;
use Illuminate\Http\Request;

class HcuadrecajaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Hcuadrecaja::all();
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
     * @param  \App\Hcuadrecaja  $hcuadrecaja
     * @return \Illuminate\Http\Response
     */
    public function show(Hcuadrecaja $hcuadrecaja)
    {
        return $hcuadrecaja;

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hcuadrecaja  $hcuadrecaja
     * @return \Illuminate\Http\Response
     */
    public function edit(Hcuadrecaja $hcuadrecaja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hcuadrecaja  $hcuadrecaja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hcuadrecaja $hcuadrecaja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hcuadrecaja  $hcuadrecaja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hcuadrecaja $hcuadrecaja)
    {
        //
    }
}
