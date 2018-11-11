setNomina = function(id_alumno,nombres,apellido_paterno,apellido_materno){
    $("#nombre-completo").text(nombres+" "+apellido_paterno+" "+apellido_materno);
    $('#dni').text(id_alumno);
    //$('#').val('apellido-paterno');
    //$('#').val('apellido-materno');
}