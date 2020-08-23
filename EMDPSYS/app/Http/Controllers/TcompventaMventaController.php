<?php

namespace App\Http\Controllers;

use App\TcompventaMventa;
use Illuminate\Http\Request;

class TcompventaMventaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TcompventaMventa::all();
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
     * @param  \App\TcompventaMventa  $tcompventaMventa
     * @return \Illuminate\Http\Response
     */
    public function show(TcompventaMventa $tcompventaMventa)
    {
        return $tcompventaMventa;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TcompventaMventa  $tcompventaMventa
     * @return \Illuminate\Http\Response
     */
    public function edit(TcompventaMventa $tcompventaMventa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TcompventaMventa  $tcompventaMventa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TcompventaMventa $tcompventaMventa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TcompventaMventa  $tcompventaMventa
     * @return \Illuminate\Http\Response
     */
    public function destroy(TcompventaMventa $tcompventaMventa)
    {
        //
    }
}
