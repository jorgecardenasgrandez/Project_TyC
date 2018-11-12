$("#btnregistrar").click(function(){
    var idmat = $('#myModalLabel').text();
    var nota1 = $('#nota1').val();
    var nota2 = $('#nota2').val();
    var observ = $('#observaciones').val();
    var token = $("#token").val();

    $.ajax({
        url: "/registrarnomina",
        headers: {'X-CSRF-TOKEN': token},
        type: "POST",        
        data: {
            myModalLabel:idmat,
            nota1:nota1,
            nota2:nota2,
            observaciones:observ
        },
        success:function(data){      
            $("#btncerrar").click();
            location.reload();
        }
    });
});