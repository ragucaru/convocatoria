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
       
       return \View('convocatoria.prueba');
    }

    public function prueba(){
    /*     $busca=$request->get('busca');
        if ($busca != '')
            $registros = Registro::where("cedula",'LIKE','%'.$busca.'%')
            ->orWhere('nombre','LIKE','%'.$busca.'%')                       
            ->paginate(8);
        else */
         $registros = Registro::paginate(8);              
        
        return \View::make('convocatoria.parteprueba',compact('registros'));
       
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listar(Request $request)
    {
        
        $busca=$request->get('busca');
        $buscar=$request->get('buscar');
        
        if ($busca != '')
            $registros = Registro::where("especialidad",'=',$busca)                        
            ->orderBy('id','DESC')->paginate(10);

        elseif ($buscar != '')
            $registros = Registro::where("cedula",'LIKE','%'.$buscar.'%')
            ->orWhere('nombre','LIKE','%'.$buscar.'%')
            ->orderBy('id','DESC')
            ->paginate(10);

        else            
            $registros = Registro::orderBy('id','DESC')->paginate(10);     

             //return response()->json(view('convocatoria.lista', compact('registros')));
           //return view('convocatoria.lista')->with('registros',$registros);
            return response()->json(["registros" => $registros]);
   
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
        return response()->json(['mensaje'=>'Registrado Correctamente']);
       // return redirect('exito');
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
    public function edit($id)
    {
        $registro=Registro::find($id);
        return response()->json($registro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registro $Registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $registro=Registro::find($id);
        $registro->nombre = $request->nombre;
        $registro->especialidad = $request->especialidad;
        $registro->cedula = $request->cedula;
        $registro->telefono = $request->telefono;
        $registro->email = $request->email;
        $registro->save();
        return response()->json(['mensaje'=>'Actualizado Correctamente']);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registro $Registro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registro=Registro::FindOrFail($id);
        $result = $registro->delete();

        if($result){
            return response()->json(['mensaje'=>'Registro Eliminado']);
            
        }
    }
}
