@extends('convocatoria.layout')
  
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
                                                                    
                                            <div class="col-md-5">
                                                <label for="especialidad">Especialidad</label>
                                                <select class="form-control" id="especialidad" {{-- onchange="filtrar()" --}} name="especialidad">
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
                                                <button name='filtrar' type='button' id='filtrar' class='btn btn-success' onclick="filtrar()" >FILTRAR</button> 
                                            </div>
                                            
                                        </div>             
                                
                                        <div class="form-group row">
                                            
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
                <p>Total de Registros: {{$errors->total() }} </p>
            </div>
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                    
                        <thead>                    
                            <tr>                       
                                <th width="25%">Nombre</th>
                                <th width="35%">Especialidad</th>
                                <th width="10%">Cédula</th>
                                <th width="10%">Telefono</th>
                                <th width="20%">Email</th>                                            
                            </tr>
<<<<<<< HEAD:resources/views/lista.blade.php
                        </thead>               
                         
                    </table>
=======
                        </thead>
                    </table>



>>>>>>> 14d26780e134e86848fd94fcd261cc2888872098:resources/views/convocatoria/lista.blade.php

 
                        <table class="table table-bordered">               
                            <tbody id='aspirantes'>
                            </tbody>
                        </table>
                    
<<<<<<< HEAD:resources/views/lista.blade.php
                        
                  
                  {{--  @include('pagination.default', ['paginator' => $errors])
                    {{ $errors->links('pagination.default') }}  --}}
            </div> 
=======
                   

                    <div id="table_data">

                       {{--  {!! $registros->links() !!} --}}
                    </div>
                    
                </div>
            </div>
>>>>>>> 14d26780e134e86848fd94fcd261cc2888872098:resources/views/convocatoria/lista.blade.php
        </div>

@endsection
@section('scripts')    
    <script src="js/convocatoria/lista.js"></script> 
    
@endsection
