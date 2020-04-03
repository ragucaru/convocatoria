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
    
      var busca = $("#especialidad").val(); 
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
          var linea = $("<tr><a href=></a></tr>");
          var campo1 = $("<td >"+value.nombre+"</td>");
          var campo2 = $("<td>"+value.especialidad+"</td>");
          var campo3 = $("<td>"+value.cedula+"</td>");
          var campo4 = $("<td >"+value.telefono+"</td>");
          var campo5 = $("<td>"+value.email+"</td>");       
         
         /*  var campo5 = $("<td><button type='button' class='btn btn-success' onclick='kardex_empleado(\""+value.TITLE+"\")'>kardex</button></td>"); */
                   //console.log(value);
          linea.append(campo1, campo2, campo3, campo4,campo5);
          table.append(linea);
    });
    

}


