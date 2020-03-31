var urlchecadas = "./api/consulta-asistencia";
var dato;
var inicio;
var fin;
arreglo_dias = Array("", "LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES", "SABADO", "DOMINGO")
arreglo_mes = Array("", "ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SEPTIEMBRE", "NOVIEMBRE","DICIEMBRE")

$(document).ready(function(){
  
    cargar_empleados('');
});

function cargar_empleados(dato)
{

    var table = $("#empleados").html('');
    jQuery.ajax({
          data: {'buscar': dato},
          type: "GET",
          dataType: "json",
          url:  './api/empleado',
    }).done(function( data, textStatus, jqXHR ) {
         // console.log(data);
          cargar_datos_empleado(data.usuarios.data);
          
          }).fail(function( jqXHR, textStatus, errorThrown ) {
          
    });
}

function prueba(){
      alert("prueba");
}