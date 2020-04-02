@extends('layout')

@section('title','Registro de Aspirantes')
    
@section('content')
<div class="container">        
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">                
                <div class="card-body ">        
                    <form method="POST" action='crear'>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                    
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>                                    
                                <input type="text" maxlength="255" class="form-control" id="nombre" name="nombre" placeholder="Nombre..." required>
                                
                            </div>
                            <div class="col-md-6">
                                <label for="nombre" class="col-sm-3 col-form-label">Cédula</label>
                                <input type="text" maxlength="10" class="form-control" id="cedula" name="cedula" placeholder="Ced.Prof...." required>
                            </div>
                        </div>   
                        <div class="form-group row">
                            <div class="col-md-6">
                               <!--  <div class="form-group"> -->
                                    <label for="especialidad" class="col-sm-3 col-form-label">Especialidad</label>
                                    <select class="form-control" id="especialidad" name="especialidad">
                                        <option>Neumólogo</option>
                                        <option>Neumólogo Pediatra</option>
                                        <option>Intensivista</option>
                                        <option>Urgenciólogo</option>
                                        <option>Anesteciólogo</option>
                                        <option>Enfermero/a/s especializadas en urgencias médicas e intensivistas</option>
                                    </select>
                               <!--  </div> -->
                            </div>
                            <div class="col-md-6">
                                <label for="telefono" class="col-sm-3 col-form-label">Teléfono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" maxlength="10" placeholder="Telefono..." required>
                            </div>
                        </div> 
                        <div class="form-group row">                                
                           
                            <div class="form-group col-md-6">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="email...">
                            </div> 
                        </div>  

                        
                        <button class="btn btn-primary" type="submit">Guardar</button>
                    
                    
                    </form>
                    </div>
            </div>
        </div>
    </div>                
</div>
@endsection


