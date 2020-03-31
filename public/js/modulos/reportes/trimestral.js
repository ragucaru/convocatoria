var letras = ["", "UNO", "DOS", "TRES"];

$(document).ready(function()
{
    //cargar_dato("");
    cargar_catalogo();
});

function cargar_catalogo()
{
      var select = $("#tipo_trabajador");
      select.html("");
      jQuery.ajax({
            data: {'buscar': ""},
            type: "GET",
            dataType: "json",
            url: './api/catalogo',
      }).done(function( data, textStatus, jqXHR ) {
            $.each(data.catalogo, function(index, valor)
           {
                 if(valor.DEPTID!=1)
                 {
                        select.append("<option value='"+valor.DEPTID+"'>"+valor.DEPTNAME+"</option>");
                 }
           });
            
      }).fail(function( jqXHR, textStatus, errorThrown ) {
            
      });
}

function btn_filtrar()
{
      //console.log("entro");
      var anio = $("#anio").val();
      var trimestre = $("#trimestre").val();
      var tipo_trabajador = $("#tipo_trabajador").val();
      var quincena = $("#quincena").val();

      obj_filtro = { 'anio': anio, 'trimestre': trimestre, 'tipo_trabajador': tipo_trabajador };
      cargar_dato(obj_filtro);
}

function cargar_dato(dato)
{
      var lista = $("#lista_personal");
      lista.html("");
      var linea_cargar = $("<tr><td colspan='22'>Cargando espere un momento, por favor. <i class='fa fa-spin fa-refresh'></i></td></tr>");
      lista.append(linea_cargar);

      jQuery.ajax({
            data: dato,
            type: "GET",
            dataType: "json",
            url: './api/trimestral',
      }).done(function( data, textStatus, jqXHR ) {
            lista.html("");
            console.log(data.usuarios.length);
            if(data.usuarios.length == 0)
            {
                  var linea = $("<tr ></tr>");
                  var campo1 = $("<td colspan='20'>No se encontraron resultados</td>");
                  linea.append(campo1);
                  lista.append(linea);
                    
            }
            var contador = 0;
            $.each(data.usuarios, function(index, value)
            {
                contador = contador + 1;
                var linea = $("<tr ></tr>");
                var campo1 = $("<td>"+contador+"</td>");
                var campo2 = $("<td>"+value.TITLE+"</td>");
                var campo3 = $("<td>"+value.PAGER+"</td>");
                var campo4 = $("<td>"+value.carType+"</td>");
                var campo5 = $("<td>"+value.jornada_laboral+" HRS.</td>");
                var campo6 = $("<td>"+value.Badgenumber+"</td>");
                var campo7 = $("<td>"+value.Name+"</td>");
                var campo8 = $("<td>"+value.TRIMESTRAL+"</td>");
                var campo9 = $("<td>"+letras[value.TRIMESTRAL]+"</td>");
                
                linea.append(campo1, campo2, campo3, campo4, campo5, campo6, campo7, campo8, campo9);
                lista.append(linea);

             
            
            });
            
      }).fail(function( jqXHR, textStatus, errorThrown ) {
            
      });
}

function generar_reporte()
{
      var anio = $("#anio").val();
      var trimestre = $("#trimestre").val();
      var tipo_trabajador = $("#tipo_trabajador").val();

      /*obj_filtro = { 'anio': anio, 'mes': mes, 'tipo_trabajador': tipo_trabajador, 'quincena': quincena };*/

      
      win = window.open( './api/reporte-trimestral?anio='+anio+"&trimestre="+trimestre+"&tipo_trabajador="+tipo_trabajador, '_blank');
}