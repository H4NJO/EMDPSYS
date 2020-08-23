<?php

namespace App\Http\Controllers;

use App\Htrabextra;
use Illuminate\Http\Request;

class HtrabextraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Htrabextra::all();
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
     * @param  \App\Htrabextra  $htrabextra
     * @return \Illuminate\Http\Response
     */
    public function show(Htrabextra $htrabextra)
    {
        return $htrabextra;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Htrabextra  $htrabextra
     * @return \Illuminate\Http\Response
     */
    public function edit(Htrabextra $htrabextra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Htrabextra  $htrabextra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Htrabextra $htrabextra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Htrabextra  $htrabextra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Htrabextra $htrabextra)
    {
        //
    }
}
