
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






   function mostrarMensaje(mensaje){
    $("#divmsg").empty();
    $("#divmsg").append("<p>"+mensaje+"</p>");
    $("#divmsg").show(500);
    $("#divmsg").hide(3000);

   }


   function limpiarCampos(){
    $("#nombre").val(''); 
    $("#especialidad").val(''); 
    $("#cedula").val(''); 
    $("#telefono").val(''); 
    $("#especialidad").val(''); 
   }

  