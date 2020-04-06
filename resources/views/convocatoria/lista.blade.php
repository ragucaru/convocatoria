@extends('convocatoria.layout')
  
@section('title','Lista de Especialistas')

@section('content')
    
<div class="container">         
    <div class="row justify-content-md-center">
        <h5>Lista de Especialistas Bolsa de Trabajo</h5>
    </div>
    <div id="divmsg" style="display:none" class="alert-primary" role="alert">
    </div>
<div class="container">        
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card bg-light mb-3">Filtro</div>
                    <div class="card-body ">
                            <form >
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}"></input>
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <label for="nombre">Nombre</label>                    
                                        <input type="text" id= = "nombre" name = "nombre" class="form-control" placeholder="Nombre o Cédula" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    </div>
                                                            
                                    <div class="col-md-6">
                                        <label for="especialidad">Especialidad</label>
                                        <select class="form-control" id="espe_filtro"  name="espe_filtro">
                                            <option></option>
                                            <option>Neumólogo</option>
                                            <option>Neumólogo Pediatra</option>
                                            <option>Intensivista</option>
                                            <option>Urgenciólogo</option>
                                            <option>Anesteciólogo</option>
                                            <option>Enfermero/a/s especializadas en urgencias médicas e intensivistas</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <br>
                                        <button type='button' id='filtrar' class='btn btn-success' onclick="filtrar()" >FILTRAR</button> 
                                    </div>
                                    
                                </div>             
                        
                                <div class="form-group row">
                                    
                                </div>
                            </form> 
                        
                    </div>

                    
                </div>
             </div>
        </div> 
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
            
                <thead>                    
                    <tr>                       
                        <th width="25%">Nombre</th>
                        <th width="25%">Especialidad</th>
                        <th width="10%">Cédula</th>
                        <th width="10%">Telefono</th>
                        <th width="20%">Email</th>   
                        <th width="10%">-</th>  
                        <th width="10%">-</th>                                           
                    </tr>
                </thead>
            </table>

            {{-- @foreach($registros as $registro)
                <tr>
                    <td>{{$registro->nombre}}</td>
                    <td>{{$registro->especialidad}}</td>
                    <td>{{$registro->cedula}}</td>
                    <td>{{$registro->telefono}}</td>
                    <td>{{$registro->email}}</td>
                </tr>
            @endforeach
            <div class="text-center"> {{$registro->links()}}</div> --}}

            <table class="table table-bordered">               
                <tbody id='aspirantes'>
                </tbody>
            </table> 
           {{--  {{$registros->links()}}  --}}
        </div>
    </div>
</div>
<div class="modal" id="editar" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar Registro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            @include('convocatoria.formulario')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="actualizar()">Actualizar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="agregar" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar Registro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            @include('convocatoria.formulario')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="agregar()">Guardar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  @endsection
</div>
</div>
    @section('scripts')    
    <script src="js/convocatoria/lista.js"></script> 
    
@endsection
