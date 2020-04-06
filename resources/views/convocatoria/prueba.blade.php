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
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>  
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        @section('scripts')                         
        @show
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
                <h5>Lista dsdsdsdsdde Especialistas Bolsa de Trabajo</h5>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <form >

                    <div class="input-group mb-12">
                        <input type="text" name = "nombre" class="form-control" placeholder="Nombre o Cédula" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button type='button' id='filtrar' class='btn btn-success' onclick="filtrar()" >FILTRAR</button> 
                        </div>
                    </div>                
                                                
                        
                </form>
            </div>
        </div>
    </body>
</html>

<div id="mostrar">
              
</div>  
 
<script src="js/convocatoria/prueba.js"></script> 
    


