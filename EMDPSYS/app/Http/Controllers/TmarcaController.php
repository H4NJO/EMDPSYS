<?php

namespace App\Http\Controllers;

use App\Tmarca;
use Illuminate\Http\Request;

class TmarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tmarca::all();
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
     * @param  \App\Tmarca  $tmarca
     * @return \Illuminate\Http\Response
     */
    public function show(Tmarca $tmarca)
    {
        return $tmarca;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tmarca  $tmarca
     * @return \Illuminate\Http\Response
     */
    public function edit(Tmarca $tmarca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tmarca  $tmarca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tmarca $tmarca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tmarca  $tmarca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tmarca $tmarca)
    {
        //
    }
}
