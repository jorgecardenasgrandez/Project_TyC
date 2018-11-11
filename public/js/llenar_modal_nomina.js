setNomina = function(id_alumno,nombres,apellido_paterno,apellido_materno,nro_matricula){
    $("#nombre-completo").text(nombres+" "+apellido_paterno+" "+apellido_materno);
    $('#dni').text(id_alumno);
    $('#myModalLabel').text('Nomina '+nro_matricula);
    //$('#').val('apellido-materno');
}