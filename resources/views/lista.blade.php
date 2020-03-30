<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Registro</title>
  </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <div class="container">
            <div class="row">
                <form method="GET" action='lista/buscar'>
                        <div class="form-group">
                            <label for="Nombre">Nombre</label>
                            <input type="text" class="form-control" name = "nombre" >
                        </div>
                        <button type="submit" class="btn btn-primary">buscar</button>
                        
                </form>
                    <br>
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
            </div>
        </div>

    </body>
</html>
