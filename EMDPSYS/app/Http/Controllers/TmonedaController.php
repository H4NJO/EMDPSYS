<?php

namespace App\Http\Controllers;

use App\Tmoneda;
use Illuminate\Http\Request;

class TmonedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tmoneda::all();
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
     * @param  \App\Tmoneda  $tmoneda
     * @return \Illuminate\Http\Response
     */
    public function show(Tmoneda $tmoneda)
    {
        return $tmoneda;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tmoneda  $tmoneda
     * @return \Illuminate\Http\Response
     */
    public function edit(Tmoneda $tmoneda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tmoneda  $tmoneda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tmoneda $tmoneda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tmoneda  $tmoneda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tmoneda $tmoneda)
    {
        //
    }
}
