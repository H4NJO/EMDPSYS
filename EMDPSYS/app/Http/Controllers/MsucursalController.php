<?php

namespace App\Http\Controllers;

use App\Msucursal;
use Illuminate\Http\Request;

class MsucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Msucursal::all();
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
     * @param  \App\Msucursal  $msucursal
     * @return \Illuminate\Http\Response
     */
    public function show(Msucursal $msucursal)
    {
        return $msucursal;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Msucursal  $msucursal
     * @return \Illuminate\Http\Response
     */
    public function edit(Msucursal $msucursal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Msucursal  $msucursal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Msucursal $msucursal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Msucursal  $msucursal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Msucursal $msucursal)
    {
        //
    }
}
