$("#tag").change(function(event){
        $.get("/obtenerProfesor/"+event.target.value+"",function(response,profesor){
      //      console.log(response);
            $("#nombres").val(response.nom_prof);
            $("#apellido-materno").val(response.apeMaterno_prof);
            $("#apellido-paterno").val(response.apePaterno_prof);
            $("#sexo").val(response.sexo_prof);
            $("#fecha-nacimiento").val(response.fechaNac_prof);
            $("#estado").val(response.estado_prof)
            $("#idprof").val(response.id);
        });    
    
});