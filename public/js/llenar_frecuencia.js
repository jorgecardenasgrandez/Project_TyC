$("#grupo").change(function(event){
    $.get("/traerFrecuencia/"+event.target.value+"",function(response,grupo){
    console.log(response);
    $("#frecuencia").val("sdfsdfsdf")
    });
});