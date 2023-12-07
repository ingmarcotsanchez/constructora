var usu_id = $('#usu_idx').val();

$(document).ready(function(){
    $.post("/constructora/controller/usuario.php?opc=total_Proyectos", { usu_id : usu_id }, function (data) {
        console.log(data);
        data = JSON.parse(data);
        $('#lbltotalProyectos').html(data.total);
    });
    $.post("/constructora/controller/usuario.php?opc=total_Clientes", { usu_id : usu_id }, function (data) {
        data = JSON.parse(data);
        $('#lbltotalClientes').html(data.total);
    });
    $.post("/constructora/controller/usuario.php?opc=total_ClientesX", { usu_id : usu_id }, function (data) {
        data = JSON.parse(data);
        $('#lbltotalClientesX').html(data.total);
    });
});