<?php

namespace App\Http\Controllers;

use App\Tsubcategoria;
use Illuminate\Http\Request;

class TsubcategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tsubcategoria::all();
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
     * @param  \App\Tsubcategoria  $tsubcategoria
     * @return \Illuminate\Http\Response
     */
    public function show(Tsubcategoria $tsubcategoria)
    {
        return $tsubcategoria;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tsubcategoria  $tsubcategoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Tsubcategoria $tsubcategoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tsubcategoria  $tsubcategoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tsubcategoria $tsubcategoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tsubcategoria  $tsubcategoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tsubcategoria $tsubcategoria)
    {
        //
    }
}
