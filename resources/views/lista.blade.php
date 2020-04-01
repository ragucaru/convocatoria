<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Lista de Especialistas</title>
  </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <div class="container">

            <div class="row">
                    <div class="col-md-6">
                        <img src="images/salud.png" class="rounded float-left" alt="...">
                        
                    </div>
                    <div class="col-md-6">
                        <img src="images/chiapas.png" class="rounded float-right" alt="...">
                        
                    </div>
            </div>
         </div>
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
                                <form class="form-inline" method="get" action='lista'>
                                
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label for="nombre">Nombre</label>                    
                                                <input type="text" name = "nombre" class="form-control" placeholder="Nombre o Cédula" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            </div>
                                            <div class="col-md-1">
                                            </div>                          
                                            <div class="col-md-6">
                                                <label for="especialidad">Especialidad</label>
                                                <select class="form-control" id="especialidad" name="especialidad">
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
                                
                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                             <button class="btn btn-primary" type="submit">Buscar</button>    
                                            </div>
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
                <p>Total de Registros: {{$registros->total() }} </p>
            </div>
        </div>
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
                        <tbody>
                            @foreach($registros as $registro)
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
                --}}
                                </tr>
                            @endforeach  

                        </tbody>
                    </table>
                    {{ $registros->links() }}
            </div>
        </div>

    </body>
</html>
