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
        
        //$registros = Registro::all(); 
        //return \View::make('lista',compact('registros'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buscar(Request $request)
    {
        
        $buscar=$request->nombre;
        $busca=$request->get('especialidad');
        
        if (isset($busca))
            $registros = Registro::where("especialidad",'=',$busca)
                        /* ->orWhere("cedula",'LIKE','%'.$buscar.'%')
                        ->orWhere('nombre','LIKE','%'.$buscar.'%') */
                        ->paginate(10);

        elseif (isset($buscar))
            $registros = Registro::where("cedula",'LIKE','%'.$buscar.'%')
            ->orWhere('nombre','LIKE','%'.$buscar.'%') 
            ->paginate(10);
        else
            $registros = Registro::paginate(10); 

            return view('lista', ['registros' => $registros]);
       
        
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
        try{
         $this->validate($request, [
            'nombre' => 'required|max:255',
            'cedula' => 'required|max:10',
            'telefono' => 'required|max:10'

        ]); 
        $registro = new Registro;
        $registro->nombre = $request->nombre;
        $registro->especialidad = $request->especialidad;
        $registro->cedula = $request->cedula;
        $registro->telefono = $request->telefono;
        $registro->email = $request->email;
        $registro->save();
        return redirect('exito');
         }catch (Exception $e) { 
            // if an exception happened in the try block above 
         
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registro  $Registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $Registro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registro  $Registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $Registro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registro $Registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $Registro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registro $Registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $Registro)
    {
        //
    }
}
