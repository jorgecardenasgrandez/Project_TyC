$("#periodo").change(function(event){
        $.get("/obtenerHistorialGeneral/"+event.target.value+"",function(response,profesor){
      console.log(response);
            $("#nro-alumnos").val(response.nro_alumnos);
            $("#nro-profesores").val(response.nro_profesores);
            $("#nro-grupos").val(response.nro_grupos);
            $("#modulo-top").val(response.modulo_top);
            $("#diferencia-alumnado").val(response.diferencia_alumnos);
            $("#nro-modulos").val(response.nro_modulos);
            $("#nro-matriculas").val(response.nro_matriculas);
            $("#modulo-top-matriculas").val(response.modulo_top_matriculas);
            $("#modulo-top-grupos").val(response.modulo_top_grupos);
            //$("#nro-alumnos").val(response.nro_alumnos);
        });
});