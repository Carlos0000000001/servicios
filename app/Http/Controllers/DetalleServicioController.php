<?php

namespace App\Http\Controllers;

use App\Models\detalleservicios;
use Illuminate\Http\Request;

class DetalleServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $DetalleServicio = new detalleservicios();

        $resultados = $DetalleServicio::get();

        return view('detallesservicio.mostrar', ['detallesservicio'=>$resultados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('detallesservicio.crear');
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
        $DetalleServicio = new detalleservicios();
        $DetalleServicio->id =$request->id;
        $DetalleServicio->numerodeordenservicio =$request->numerodeordenservicio;
        $DetalleServicio->detalleservicio = $request->detalleservicio;
        $DetalleServicio->fechaatencon = $request ->fechaatencon;

        $DetalleServicio->save();
        return redirect(Route("detallesservicio.index"));



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
