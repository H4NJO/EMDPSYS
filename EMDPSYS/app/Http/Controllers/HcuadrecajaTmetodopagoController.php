<?php

namespace App\Http\Controllers;

use App\HcuadrecajaTmetodopago;
use Illuminate\Http\Request;

class HcuadrecajaTmetodopagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = HcuadrecajaTmetodopago::all();
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
     * @param  \App\HcuadrecajaTmetodopago  $hcuadrecajaTmetodopago
     * @return \Illuminate\Http\Response
     */
    public function show(HcuadrecajaTmetodopago $hcuadrecajaTmetodopago)
    {
        return $hcuadrecajaTmetodopago;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HcuadrecajaTmetodopago  $hcuadrecajaTmetodopago
     * @return \Illuminate\Http\Response
     */
    public function edit(HcuadrecajaTmetodopago $hcuadrecajaTmetodopago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HcuadrecajaTmetodopago  $hcuadrecajaTmetodopago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HcuadrecajaTmetodopago $hcuadrecajaTmetodopago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HcuadrecajaTmetodopago  $hcuadrecajaTmetodopago
     * @return \Illuminate\Http\Response
     */
    public function destroy(HcuadrecajaTmetodopago $hcuadrecajaTmetodopago)
    {
        //
    }
}
