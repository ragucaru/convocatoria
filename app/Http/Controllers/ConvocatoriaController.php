<?php

namespace App\Http\Controllers;

use App\Registro;
use Illuminate\Http\Request;

class ConvocatoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registro::all(); 
        return \View::make('lista',compact('registros'));
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
        
         $this->validate($request, [
            'nombre' => 'required|max:255',
            'cedula' => 'required|max:10|unique',
            'telefono' => 'required|max:10'

        ]); 
        $registro = new Registro;
        $registro->nombre = $request->nombre;
        $registro->especialidad = $request->especialidad;
        $registro->cedula = $request->cedula;
        $registro->telefono = $request->telefono;
        $registro->email = $request->email;
        $registro->save();
        return redirect('registro')->with('notice', 'El usuario ha sido modificado correctamente.');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vc  $vc
     * @return \Illuminate\Http\Response
     */
    public function show(vc $vc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vc  $vc
     * @return \Illuminate\Http\Response
     */
    public function edit(vc $vc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vc  $vc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vc $vc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vc  $vc
     * @return \Illuminate\Http\Response
     */
    public function destroy(vc $vc)
    {
        //
    }
}
