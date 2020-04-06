var dato;
$(document).ready(function(){ 

    cargar_lista('');
    $(document).on('click', '.pagination a', function(event){
        event.preventDefault(); 
        var page = $(this).attr('href').split('page=')[1];
        fetch_data(page);
       }); 
    
    
});



  
   function fetch_data(page)
   {
    $.ajax({
     url:"/lista?page="+page,
     success:function(data)
     {
      $('#table_data').html(data);
     }
    });
   } 

function filtrar()
{  
    
      var busca = $("#espe_filtro").val(); 
      cargar_lista(busca);
}


function cargar_lista(dato)
{   
    var table = $("#aspirantes").html('');
    jQuery.ajax({   
          data: {'busca': dato},     
          type: "GET",
          dataType: "json",
          url:  'api/lista'
    }).done(function( data, textStatus, jqXHR ) {
          console.log(data);
         cargar_aspirantes(data.registros.data);
        // alert("Total de Registros: "+data.registros.total)
          }).fail(function( jqXHR, textStatus, errorThrown ) {

        
          
    });
}



function cargar_aspirantes(datos)
{
    var table = $("#aspirantes");
      $.each(datos, function(key, value)
    {
          var linea = $("<tr></tr>");
          var campo1 = $("<td>"+value.nombre+"</td>");         
          var campo2 = $("<td>"+value.especialidad+"</td>");
          var campo3 = $("<td>"+value.cedula+"</td>");
          var campo4 = $("<td >"+value.telefono+"</td>");
          var campo5 = $("<td>"+value.email+"</td>");      
         
         var campo6 = $("<td><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#editar' onclick='editar("+value.id+")'>Editar</button></td>"); 
         var campo7 = $("<td><button type='button' class='btn btn-danger' onclick='eliminar("+value.id+")'>Eliminar</button></td>");
                   //console.log(value);
          linea.append(campo1, campo2, campo3, campo4,campo5,campo6,campo7);
          table.append(linea);
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
               cargar_lista('');
              $('#editar').modal('toggle');
              mostrarMensaje(data.mensaje);
              limpiarCampos();
          }
      })    
   
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



     
  