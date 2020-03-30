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
            <form method="POST" action='crear'>
            <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
            
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
                        <input type="text" maxlength="255" class="form-control" id="nombre" name="nombre" placeholder="Nombre..." required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="nombre" class="col-sm-3 col-form-label">Cédula</label>
                        <input type="text" maxlength="10" class="form-control" id="cedula" name="cedula" placeholder="Ced.Prof...." required>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="form-group">
                            <label for="especialidad" class="col-sm-3 col-form-label">Especialidad</label>
                            <select class="form-control" id="especialidad" name="especialidad">
                                <option>Neumólogo</option>
                                <option>Neumólogo Pediatra</option>
                                <option>Intensivista</option>
                                <option>Urgenciólogo</option>
                                <option>Anesteciólogo</option>
                                <option>Enfermero/a/s especializadas en urgencias médicas e intensivistas</option>
                            </select>
                        </div>
                    </div>
                </div> 
                <div class="form-row">
                    
                    <div class="form-group col-md-3">
                        <label for="telefono" class="col-sm-3 col-form-label">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" maxlength="10" placeholder="Telefono..." required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="email...">
                    </div> 
                </div>  

                
                 <button class="btn btn-primary" type="submit">Guardar</button>
               
             
            </form>


    </body>
</html>
