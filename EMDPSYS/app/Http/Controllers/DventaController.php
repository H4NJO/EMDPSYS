<?php

namespace App\Http\Controllers;

use App\Dventa;
use Illuminate\Http\Request;

class DventaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dventa::all();
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
     * @param  \App\Dventa  $dventa
     * @return \Illuminate\Http\Response
     */
    public function show(Dventa $dventa)
    {
        return $dventa;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dventa  $dventa
     * @return \Illuminate\Http\Response
     */
    public function edit(Dventa $dventa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dventa  $dventa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dventa $dventa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dventa  $dventa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dventa $dventa)
    {
        //
    }
}
