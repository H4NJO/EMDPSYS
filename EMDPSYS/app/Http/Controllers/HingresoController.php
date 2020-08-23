<?php

namespace App\Http\Controllers;

use App\Hingreso;
use Illuminate\Http\Request;

class HingresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Hingreso::all();
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
     * @param  \App\Hingreso  $hingreso
     * @return \Illuminate\Http\Response
     */
    public function show(Hingreso $hingreso)
    {
        return $hingreso;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hingreso  $hingreso
     * @return \Illuminate\Http\Response
     */
    public function edit(Hingreso $hingreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hingreso  $hingreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hingreso $hingreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hingreso  $hingreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hingreso $hingreso)
    {
        //
    }
}
