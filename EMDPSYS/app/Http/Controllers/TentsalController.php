<?php

namespace App\Http\Controllers;

use App\Tentsal;
use Illuminate\Http\Request;

class TentsalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tentsal::all();
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
     * @param  \App\Tentsal  $tentsal
     * @return \Illuminate\Http\Response
     */
    public function show(Tentsal $tentsal)
    {
        return $tentsal;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tentsal  $tentsal
     * @return \Illuminate\Http\Response
     */
    public function edit(Tentsal $tentsal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tentsal  $tentsal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tentsal $tentsal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tentsal  $tentsal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tentsal $tentsal)
    {
        //
    }
}
