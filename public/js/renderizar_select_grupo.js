$("#modulo").change(function(event){
    $.get("/obtenergrupos/"+event.target.value+"",function(response,modulo){
    //console.log(response);
        $("#grupo").empty();
        $("#grupo").append("<option>-</option>");
        for(i=0; i<response.length; i++){
            $("#grupo").append("<option value='"+response[i].id+''+response[i].frecuencia_id+''+response[i].turno_id+"'>"+response[i].id+"</option>");
            //console.log(response[i].id+''+response[i].frecuencia_id);
        };
    });
});