<?php

namespace App\Http\Controllers;

use App\Tcategoria;
use Illuminate\Http\Request;

class TcategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tcategoria::all();
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
     * @param  \App\Tcategoria  $tcategoria
     * @return \Illuminate\Http\Response
     */
    public function show(Tcategoria $tcategoria)
    {
        return $tcategoria;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tcategoria  $tcategoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Tcategoria $tcategoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tcategoria  $tcategoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tcategoria $tcategoria)
    {
        $tcategoria->update($request->all());

        return response()->json($article, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tcategoria  $tcategoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tcategoria $tcategoria)
    {
        $tcategoria->delete();

        return response()->json(null, 204);
    }
}
