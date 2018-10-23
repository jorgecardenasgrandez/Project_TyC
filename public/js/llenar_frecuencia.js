$("#grupo").change(function(event){
    $.get("/obtenergrupo/"+event.target.value+"",function(response,grupo){
    
        //console.log(response);
        $("#fechas").val(response.fecInicio+'    -    '+response.fecFin);
        $("#grupo-id").attr("value",response.id);
    });
    
    $.get("/traerfrecuencia/"+event.target.value+"",function(response,grupo){
    
        
        $("#frecuencia").val(response.id+'. '+response.descripcion);
        //$("#frecuencia").val(response.id);
    });
    $.get("/traerturno/"+event.target.value+"",function(response,grupo){
       
    //console.log(response);
        $("#turno").val(response.id+'. '+response.descripcion);
        
    });
});