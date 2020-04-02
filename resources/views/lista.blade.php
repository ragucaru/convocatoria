@extends('layout')
  
@section('title','Lista de Especialistas')

@section('content')
 
         <div class="container">         
            <div class="row justify-content-md-center">
                <h5>Lista de Especialistas Bolsa de Trabajo</h5>
            </div>
        </div>
        <div class="container">        
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card bg-light mb-3">Filtro</div>
                            <div class="card-body ">
                                {{-- <form class="form-inline" method="get" action='lista'> --}}
                                
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label for="nombre">Nombre</label>                    
                                                <input type="text" id= = "nombre" name = "nombre" class="form-control" placeholder="Nombre o Cédula" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            </div>
                                            <div class="col-md-1">
                                            </div>                          
                                            <div class="col-md-5">
                                                <label for="especialidad">Especialidad</label>
                                                <select class="form-control" id="especialidad" onchange="filtrar()" name="especialidad">
                                                    <option></option>
                                                    <option>Neumólogo</option>
                                                    <option>Neumólogo Pediatra</option>
                                                    <option>Intensivista</option>
                                                    <option>Urgenciólogo</option>
                                                    <option>Anesteciólogo</option>
                                                    <option>Enfermero/a/s especializadas en urgencias médicas e intensivistas</option>
                                                </select>
                                            </div>
                                            
                                        </div>             
                                
                                        <div class="form-group row">
                                            <div class="col-md-2">
                                                
                                             <button name='filtrar' type='button' id='filtrar' class='btn btn-success' onclick="filtrar()" >FILTRAR</button> 
                                            </div>
                                        </div> 
                                {{-- </form> --}}
                            </div>

                            
                        </div>
                     </div>
                </div> 
            </div>
        </div>
        {{-- <div class="container">
            <div class="row">
                <p>Total de Registros: {{$registros->total() }} </p>
            </div>
        </div> --}}
        <div class="container">
            <div class="row">
                    
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>                    
                            <tr>                       
                                <th>Nombre</th>
                                <th>Especialidad</th>
                                <th>Cédula</th>
                                <th>Telefono</th>
                                <th>Email</th>                                            
                            </tr>
                        </thead>
                    
                            {{-- @foreach($registros as $registro)
                                <tr>
                                    <td>{{ $registro->nombre }}</td>
                                    <td>{{ $registro->especialidad }}</td>
                                    <td>{{ $registro->cedula }}</td>
                                    <td>{{ $registro->telefono }}</td>
                                    <td>{{ $registro->email }}</td>
                                
                                    {{--  <td>
                                        <a class="btn btn-primary btn-xs" href="{{ route('movie.edit',['id' => $movie->id] )}}" >Edit</a> 
                                        <a class="btn btn-danger btn-xs" href="{{ route('movie/destroy',['id' => $movie->id] )}}" >Delete</a>
                                    </td>
               
                                </tr>
                            @endforeach  --}}




 
                        <table class="table table-bordered">               
                            <tbody id='aspirantes'>
                            </tbody>
                        </table>
                    
                    </table>
                     {{ $registros->links() }}
            </div>
        </div>

@endsection
@section('scripts')    
    <script src="js/convocatoria/registro.js"></script> 
@endsection
