var datos_credencializacion;
var datos_checadas_mes;
var resumen_checadas;
var validacion;
var urlchecadas = "../api/consulta-asistencia";
var dato;
var inicio;
var fin;

arreglo_dias = Array("", "LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES", "SABADO", "DOMINGO")

$(document).ready(function(){
      console.log("hola");
      cargar_dato('', './api/kardex');
});

function cargar_dato(dato, urlrh)
{
      
      jQuery.ajax({
            data: {'buscar': dato},
            type: "GET",
            dataType: "json",
            url: urlrh,
      }).done(function( data, textStatus, jqXHR ) {
            console.log(data);
            cargar_datos_empleado(data.usuarios.data);
            
            }).fail(function( jqXHR, textStatus, errorThrown ) {
            
      });
}

function cargar_datos_empleado(datos)
{
      var table = $("#empleados");
        $.each(datos, function(key, value)
      {
            var linea = $("<tr></tr>");
            var campo1 = $("<td>"+value.Badgenumber+"</td>");
            var campo2 = $("<td>"+value.Name+"</td>");
            var campo3 = $("<td>"+value.TITLE+"</td>");
            var campo4 = $("<td><button type='button' class='btn btn-success' onclick='kardex_usuario(\""+value.TITLE+"\")'>kardex</button></td>");
            
            var campo5 = $("<td>Sin Horario</td>");
            if(value.horarios.length > 0)
                  var campo5 = $("<td>Horario Activo</td>");

            //console.log(value);
            linea.append(campo1, campo2, campo3, campo4, campo5);
            table.append(linea);
      });
}

function kardex_usuario(id)
{
      console.log(id);
      window.location.replace("./kardex/"+id);
}

function cargar_datos_checadas(urlchecadas)
{
      $("#datos_filtros_checadas").html("<tr><td colspan='5'><i class='fa fa-refresh fa-spin'></i> Cargando, Espere un momento por favor</td></tr>");
      jQuery.ajax({
            data: {'rfc': dato,
                   'fecha_inicio': inicio,
                   'fecha_fin': fin
                  },
            type: "GET",
            dataType: "json",
            url: urlchecadas,
      }).done(function( data, textStatus, jqXHR ) {
            $("#inicio").val(data.fecha_inicial);
            $("#fin").val(data.fecha_final);
            datos_checadas_mes = data.data;
            resumen_checadas = data.resumen[0];
            validacion = data.validacion;
            if(validacion != null){
                  cargar_blade_checadas();
                  cargar_blade_resumen();
            }else{

                  var resumen = $("#resumen");
                  var checadas = $("#checadas");
                  resumen.html("");
                  checadas.html("");
                  $("#resumen").append("<div class=card-body> <h1 class=card-title align=center>Acudir a Sistematización</h1> <hr> <div class=row> <div class='col-md-6 col-sm-6' style='text-align:left'><img src=../images/salud.png class=img-fluid flex alt=Responsive image width=50%></div> <div class='col-md-6 col-sm-6' style='text-align:right' ><img src=../images/chiapas.png class=img-fluid flex alt=Responsive image width=50%></div></div> </div>");

                  document.getElementById('modal').click();


            }

            

      }).fail(function( jqXHR, textStatus, errorThrown ) {
            if ( console && console.log ) {
                  alert( "No se cargo la lista de asistencia " +" "+ textStatus);
            }
      });
}

function cargar_blade_credencializacion()
{ 

      $("#Nombre").text(datos_credencializacion.Nombre);
      $("#Adscripcion_Area").text(datos_credencializacion.DesPuesto);  
      $("#codigo").text(datos_credencializacion.codTab);
      $("#Direccion").text(datos_credencializacion.Direccion);
      $("#Adscripcion_Area").text(datos_credencializacion.Adscripcion_Area);
      $("#TipoSangre").text(datos_credencializacion.TipoSangre);
      $("#Curp").text(datos_credencializacion.Curp);
      $("#Rfc").text(datos_credencializacion.Rfc);
      $("#Clue").text(datos_credencializacion.Clue);

      if(datos_credencializacion.tieneFoto == 0){

            $("#foto").attr('src', '../images/usuarios.jpg');      
      }
      else{
            $("#foto").attr("src","http://credencializacion.saludchiapas.gob.mx/images/credenciales/"+datos_credencializacion.id+"."+datos_credencializacion.tipoFoto);
            
      }
}


function cargar_blade_checadas()
{
      if(datos_credencializacion.CodTab.substring(0,2)=="CF" && resumen_checadas.horastra==6)
            alert("Favor de Acudir al Área de Sistematización para verificar su horario");
      var table = $("#datos_filtros_checadas");
      table.html("");
      $.each(datos_checadas_mes, function(index, value){
            icono = "<i class='fa fa-check' style='color:green'></i>";
            if(value.validacion == 0)
            icono = "<i class='fa fa-close' style='color:red'></i>";
            else
            icono = "<i class='fa fa-check' style='color:green'></i>";

            table.append("<tr><td>" + arreglo_dias[value.numero_dia] + "</td><td>" + value.fecha + "</td>" + "</td><td>" + value.checado_entrada + "</td>" + "</td><td>" + value.checado_salida + "</td> <td>"+icono+"</td></tr>");
            
      })
//<td>" + value.horario + "</td>" + "</td>
            if(datos_credencializacion.CodTab.substring(0,2)=="CF" && resumen_checadas.horastra==6)
            table.append("<tr><td colspan='5' style='color:red'><h1>Favor de Acudir al Área de Sistematización para verificar su horario </h1></td></tr>");

      $('#datos_filtros_checadas tr').hover(function() {
            $(this).addClass('hover');
        }, function() {
            $(this).removeClass('hover');
        });
      
}

function cargar_blade_resumen()
{
      $("#Día_Económico").text(resumen_checadas.Día_Económico);
      $("#Falta").text(resumen_checadas.Falta);
      $("#Omisión_Entrada").text(resumen_checadas.Omisión_Entrada);
      $("#Omisión_Salida").text(resumen_checadas.Omisión_Salida);
      $("#Onomástico").text(resumen_checadas.Onomástico);
      $("#Pase_Salida").text(resumen_checadas.Pase_Salida);
      $("#Retardo_Mayor").text(resumen_checadas.Retardo_Mayor);
      $("#Retardo_Menor").text(resumen_checadas.Retardo_Menor);
      $("#Vacaciones_2018_Invierno").text(resumen_checadas.Vacaciones_2018_Invierno);
      $("#Vacaciones_2018_Primavera_Verano").text(resumen_checadas.Vacaciones_2018_Primavera_Verano);
      $("#Vacaciones_2019_Invierno").text(resumen_checadas.Vacaciones_2019_Invierno);
      $("#Vacaciones_2019_Primavera_Verano").text(resumen_checadas.Vacaciones_2019_Primavera_Verano);
      $("#Vacaciones_Extra_Ordinarias").text(resumen_checadas.Vacaciones_Extra_Ordinarias);
      $("#Vacaciones_Mediano_Riesgo").text(resumen_checadas.Vacaciones_Mediano_Riesgo);

}



function getParameterByName() {
      var ruta_completa = location.pathname;
      var splits = ruta_completa.split("/");
      return splits[(splits.length - 1)];
}



