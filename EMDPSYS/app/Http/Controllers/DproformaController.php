<?php

namespace App\Http\Controllers;

use App\Dproforma;
use Illuminate\Http\Request;

class DproformaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dproforma::all();
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
     * @param  \App\Dproforma  $dproforma
     * @return \Illuminate\Http\Response
     */
    public function show(Dproforma $dproforma)
    {
        return $dproforma;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dproforma  $dproforma
     * @return \Illuminate\Http\Response
     */
    public function edit(Dproforma $dproforma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dproforma  $dproforma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dproforma $dproforma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dproforma  $dproforma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dproforma $dproforma)
    {
        //
    }
}
