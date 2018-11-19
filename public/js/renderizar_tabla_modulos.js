$("#periodo").change(function(event){
    $.get("/obtenerDatosModulo/"+event.target.value+"",function(response,modulo){
    //console.log(response);
        $("#tabla-modulos").empty();
        for(i=0; i<response.length; i++){
            $("#tabla-modulos").append("<tr><td>1</td><td>Ofimatica Excel</td><td>Informatica</td><td>Tecnologia</td><td>20</td><td>20</td></tr>");
        };
    });
});