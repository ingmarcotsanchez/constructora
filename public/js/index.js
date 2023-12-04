function init(){
    $("#contact_form").on("submit",function(e){
        guardar(e);	
    });
}
$(document).ready(function() {

});
function guardar(e){
    console.log("prueba");
    e.preventDefault();
    var formData = new FormData($("#contact_form")[0]);
    console.log(formData);
    $.ajax({
        url: "/constructora/controller/cliente.php?opc=guardarCliente",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data){
            if (data==1){

                $.post("/constructora/controller/cliente.php?opc=emailBienvenida",{cli_correo : $("#cli_correo").val()},function(data){
                    console.log(data);
                });

                Swal.fire({
                    icon: 'success',
                    title: 'Constructores e Ingenieros',
                    text : 'Gracias por suscribirte!',
                    showConfirmButton: false,
                    timer: 2000
                })

                $("#cli_correo").val('');
            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'Constructores e Ingenieros',
                    text : 'Correo ya suscrito!',
                    showConfirmButton: false,
                    timer: 2000
                })
            }
        }
    });

}

init();