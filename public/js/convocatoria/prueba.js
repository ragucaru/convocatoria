var dato;
$(document).ready(function(){ 
    cargar_lista('');

   
    
    
});

function filtrare()
{  
    
      var busca = $("#nom_filter").val();
  
      cargar_lista(busca);
}
    
$(document).on('click', '.pagination a', function(event){
    event.preventDefault(); 
    var url = $(this).attr("href");
    alert(url);
    $.ajax({
        url:url,
        success:function(data)
        {
            $('#mostrar').empty().html(data);
        }
    });
}); 
function cargar_listasssssss(dato)
{   
    $('#mostrar').empty().html();
    jQuery.ajax({   
          data: {'busca': dato},     
          type: "GET",          
          url:  'api/parteprueba'
    }).done(function( data, textStatus, jqXHR ) {
        console.log(data);
        $('#mostrar').empty().html(data);
        
          }).fail(function( jqXHR, textStatus, errorThrown ) {

        
          
    });
}
        
    
      function cargar_lista(dato){   
        //alert('aaskalskas');
        $('#mostrar').empty().html();
      $.ajax({ 
         data: {'busca': dato},                 
          type: "GET",          
          url:  'api/parteprueba',
          success: function(data) {  
         
              console.log(data);
              $('#mostrar').empty().html(data);
          }   
    
        
          
    });  
    
    }    

    function editar(id) {
        $.ajax({
          type: 'GET',
          url: 'api/lista/'+id+'/editar',
          data: '',
          success: function(datos) {           
            $('#nombre').val(datos.nombre);
            $('#cedula').val(datos.cedula);
            $('#especialidad').val(datos.especialidad);
            $("#telefono").val(datos.telefono);
            $("#email").val(datos.email);
            $("#id").val(datos.id);  
            //$("#telefono").modal('show');
          },
          error: function() {
            alert("Hay un problema");
          }
        });
  }
      function actualizar() {
        var id = $('#id').val();
        var nombre = $("#nombre").val(); 
        var especialidad = $("#especialidad").val(); 
        var cedula = $("#cedula").val(); 
        var telefono = $("#telefono").val(); 
        var email = $("#email").val();
        $.ajax({   
              type: 'PUT',
              url:  "api/registro/"+id+"/",
              data: {nombre:nombre, especialidad:especialidad,cedula:cedula,telefono:telefono,email:email},
              success: function(data){                  
                  cargar_lista('');
                  $('#editar').modal('toggle');
                  mostrarMensaje(data.mensaje);
                  
              }
          })    
  
  }
  function mostrarMensaje(mensaje){
    $("#divmsg").empty();
    $("#divmsg").append("<p>"+mensaje+"</p>");
    $("#divmsg").show(500);
    $("#divmsg").hide(3000);

   }

   function eliminar(id) {
    $.ajax({
      type: 'DELETE',
      url: "api/registro/" + id + "/",
      success: function (data) {
       // if (data.success == 'true') {
          cargar_lista('');           
          mostrarMensaje(data.mensaje);
       // }
      }
    }); 
  }