var dato;
$(document).ready(function(){ 
    cargar_lista('');

   
    
    
});

function filtrar()
{  
    
      var busca = $("#nombre").val();
      alert(busca);
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
    
        
    
     var cargar_lista= function(data){   
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


