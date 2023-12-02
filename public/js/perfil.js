var usu_id = $('#usu_idx').val();

$(document).ready(function(){
    $.post("/constructora/controller/usuario.php?opc=mostrar",{usu_id : usu_id}, function (data){
        data = JSON.parse(data);
        console.log(data);
        $('#usu_nombre').val(data.usu_nombre);
        $('#usu_apep').val(data.usu_apep);
        $('#usu_apem').val(data.usu_apem);
        $('#usu_correo').val(data.usu_correo);
        $('#usu_pass').val(data.usu_pass);
        $('#usu_telf').val(data.usu_telf);
    });
});

$(document).on("click","#btnactualizar", function(){
    $.post("/constructora/controller/usuario.php?opc=modificar_perfil", { 
        usu_id : $('#usu_idx').val(),
        usu_nombre : $('#usu_nombre').val(),
        usu_apep : $('#usu_apep').val(),
        usu_apem : $('#usu_apem').val(),
        usu_correo : $('#usu_correo').val(),
        usu_pass : $('#usu_pass').val(),
        usu_telf : $('#usu_telf').val(),
    }, function (data) {
    });
    Swal.fire({
        title: 'Correcto!',
        text: 'Se actualizo Correctamente',
        icon: 'success',
        confirmButtonText: 'Aceptar'
    })


});