<?php

namespace App\Http\Controllers;

use App\Mcurrier;
use Illuminate\Http\Request;

class McurrierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mcurrier::all();
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
     * @param  \App\Mcurrier  $mcurrier
     * @return \Illuminate\Http\Response
     */
    public function show(Mcurrier $mcurrier)
    {
        return $mcurrier;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mcurrier  $mcurrier
     * @return \Illuminate\Http\Response
     */
    public function edit(Mcurrier $mcurrier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mcurrier  $mcurrier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mcurrier $mcurrier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mcurrier  $mcurrier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mcurrier $mcurrier)
    {
        //
    }
}
