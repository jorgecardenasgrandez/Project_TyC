$("#periodos").change(function(event){
    $.get("/obtenerDatosModulo/"+event.target.value+"",function(response,modulo){
    console.log(response);
        $("#cuerpo-tabla-modulos").empty();
        for(i=0; i<response.length; i++){
            $("#cuerpo-tabla-modulos").append("<tr><td>"+response[i]['nro']+"</td><td>"+response[i]['modulo']+"</td><td>"+response[i]['familia']+"</td><td>"+response[i]['opcion']+"</td><td>"+response[i]['nro_matriculados']+"</td><td>"+response[i]['nro_grupos']+"</td></tr>");
        };
    });
});