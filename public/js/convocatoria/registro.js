
<<<<<<< HEAD
    cargar_lista('','');
    //paginado();
    
    
});
function paginado(){
=======
function guardar(){

    var nombre = $("#nombre").val(); 
    var especialidad = $("#especialidad").val(); 
    var cedula = $("#cedula").val(); 
    var telefono = $("#telefono").val(); 
    var email = $("#especialidad").val(); 

    $.ajax({   
        type: 'POST',
        url:  "api/registro",
        data: {nombre:nombre, especialidad:especialidad,cedula:cedula,telefono:telefono,email:email},
        success: function(data){
            mostrarMensaje(data.mensaje);
            limpiarCampos();
        }
    })    
 
}
>>>>>>> 14d26780e134e86848fd94fcd261cc2888872098


function recuperarRegistro(codigo) {
    $.ajax({
      type: 'GET',
      url: 'api/lista/{}=' + codigo,
      data: '',
      success: function(datos) {
        $('#nombre').val(datos[0].nombre);
        $('#cedula').val(datos[0].cedula);
        $('#especialidad').val(datos[0].especialidad);
        $("#telefono").val(datos[0].telefono);

        //$("#telefono").modal('show');
      },
      error: function() {
        alert("Hay un problema");
      }
    });
  }

<<<<<<< HEAD
}
function filtrar()
{     
    
      var busca = $("#especialidad").val(); 
      var buscar = $("#nombre").val(); 
      cargar_lista(busca,buscar);
}
=======
>>>>>>> 14d26780e134e86848fd94fcd261cc2888872098

   function mostrarMensaje(mensaje){
    $("#divmsg").empty();
    $("#divmsg").append("<p>"+mensaje+"</p>");
    $("#divmsg").show(500);
    $("#divmsg").hide(3000);

<<<<<<< HEAD
function cargar_lista(dato,dato2)
{   
    var table = $("#aspirantes").html('');
    jQuery.ajax({   
          data: {'busca': dato,'buscar': dato2},     
          type: "GET",
          dataType: "json",
          url:  'api/lista'
    }).done(function( data, textStatus, jqXHR ) {
          //console.log(data);
         cargar_aspirantes(data.registros.data);
          
          }).fail(function( jqXHR, textStatus, errorThrown ) {
=======
   }
>>>>>>> 14d26780e134e86848fd94fcd261cc2888872098


   function limpiarCampos(){
    $("#nombre").val(''); 
    $("#especialidad").val(''); 
    $("#cedula").val(''); 
    $("#telefono").val(''); 
    $("#especialidad").val(''); 
   }

  